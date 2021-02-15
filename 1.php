<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$access_token = 'bcbe9977141acbbbca51c0f25e5bf7d45715ab80a1d336e88aff42bdd05c556ac1a54405c5fadcc1ad8cf';

//____________________vk get photo id
$params_get_photo = array(
	'owner_id' => '-55353884',
	'album_id' => 'wall',
	'count' => '1',
	'offset' => rand(1,11000),
     'access_token' => $access_token,
	'v' => '5.85'
);
$url_get_photo = "https://api.vk.com/method/photos.get?" . http_build_query($params_get_photo);
$data_get_photo = file_get_contents($url_get_photo);
$response_get_photo = json_decode($data_get_photo);
$img = $response_get_photo->response->items[0]->id;

echo $response_get_photo;
