<?php

require_once('./api.inc.php');

$braId = intval(isset($_GET['bra']) ? $_GET['bra'] : 0);

$bra = get_bra($braId);

if (strlen($bra) == 0) {
	sleep(2);
	
	header('Location: '.$_SERVER['REQUEST_URI']);
}
else {
	header('Content-Type: application/xml');

	echo $bra;
}