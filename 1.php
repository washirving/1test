<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 111;

$params = array(
	'owner_id' => '-55353884',
	'album_id' => 'wall',
	'count' => '1',
	'offset' => rand(1,12000),
	'v' => '5.85'
);
$url = "https://api.vk.com/method/photos.get?" . http_build_query($params);
$data = file_get_contents($url);
$response = json_decode($data);
$img = $response->response->items[0]->photo_604;


echo $response;
