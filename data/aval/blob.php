<?php

require_once('./api.inc.php');

$fileName = isset($_GET['i']) ? $_GET['i'] : 'nodata';

$image = get_image($fileName);

$length = strlen($image);

if ($length == 0) {
	sleep(2);
	
	header('Location: '.$_SERVER['REQUEST_URI']);
}
else {
	header('Expires: Thu, 1 Jan 1970 00:00:01 GMT');
	header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
	header('Content-Type: image/png');
	header('Content-Length: ' . strlen($image));

	echo $image;
}