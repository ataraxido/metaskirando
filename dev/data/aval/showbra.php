<?php

require_once('./api.inc.php');

$braId = intval(isset($_GET['bra']) ? $_GET['bra'] : 0);

header('Content-Type: application/xml');

echo get_bra($braId);