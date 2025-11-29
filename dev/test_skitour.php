<?php
 function get_data($url) {
	  $ch = curl_init();
	  $timeout = 5;
	  curl_setopt($ch, CURLOPT_URL, $url);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	  curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	
	  curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
	
	  $data = curl_exec($ch);
	  echo 'Erreur Curl : ' . curl_error($ch);
	  curl_close($ch);
	  return $data;
  }
	$url = "https://skitour.fr/sorties/#100";                                             
	echo "<h1>Test Skitour $url</h1>";
	$textall = get_data($url);
	echo "<p>Result CURL : $textall</p>";

?>
