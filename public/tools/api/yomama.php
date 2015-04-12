<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$file = file_get_contents("http://api.yomomma.info/");
$body = preg_replace("/.*<body[^>]*>|<\/body>.*/si", "", $file);
echo $body;