<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

require './Instagram.class.php';
$instagram = new Instagram('8277ad540728453ca8b8a2ed285486d1');
$stuff = $instagram->getUserMedia('1405518830', 4);
$datas= $stuff->data;
echo json_encode($datas);