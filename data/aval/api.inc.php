<?php
// token Metaskirando de jeremyl (1 an)

define('MF_API_TOKEN', '');

define('MF_API_DOMAIN', 'https://public-api.meteofrance.fr/public/DPBRA/v1');

define('BRA_CACHE_PATH', 'cache/');

function get_bra($id, $ttl = 3600, $synchronize = true) {
	$file = BRA_CACHE_PATH . 'bra_'.$id.'.xml';

	if (file_exists($file) && (time() - filectime($file) <= $ttl)) {
		$bra = file_get_contents($file);
	}
	else {
		$route = '/massif/BRA';
		$parameters = http_build_query(['id-massif' => $id, 'format' => 'xml', 'apikey' => MF_API_TOKEN]);

		$bra = (string) retrieve(MF_API_DOMAIN . $route . '?' . $parameters);

		if ($bra != '') {
			$bra = str_replace('../web/bra.xslt', 'bra.xslt?t=20250517', $bra);

			if ($synchronize) {
				array_map('unlink', glob(BRA_CACHE_PATH.'*_'.$id.'.*'));
			}
			else {
				@unlink($file);
			}
			
			file_put_contents($file, $bra);
		}
	}

	return $bra;
}

function get_image($image, $ttl = 3600) {
	$file = BRA_CACHE_PATH . $image;

	if (file_exists($file) && (time() - filectime($file) <= $ttl)) {
		$img = file_get_contents($file);
	}
	else {
		if (preg_match('/(.+)_([0-9]+)\.png/', $image, $matches) == 1) {
			$route = '/massif/image/' . strtr($matches[1], ['_' => '-']);
			$parameters = http_build_query(['id-massif' => $matches[2], 'apikey' => MF_API_TOKEN]);

			$img = retrieve(MF_API_DOMAIN . $route . '?' . $parameters);

			if ($img !== false) {
				@unlink($file);
				file_put_contents($file, $img);
			}
		}
		else {
			$img = '';
		}
	}

	return $img;
}

function retrieve($url, $retry = 2) {
	$data = file_get_contents($url);

	if ($data === false && $retry > 0) {
		sleep(1);

		$data = retrieve($url, $retry - 1);
	}

	return $data;
}
