<?php

require_once('./api.inc.php');

$fileName = isset($_GET['i']) ? $_GET['i'] : 'nodata';

$image = get_image($fileName);

header('Content-Type: image/png');
header('Content-Length: ' . strlen($image));

echo $image;