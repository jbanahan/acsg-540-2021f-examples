<?php

$address = $_GET['address'];

$formattedAddr = urlencode($address[0]).',+'.urlencode($address[1]).',+'.$address[2].',+'. $address[3];

$googleURL = "https://maps.googleapis.com/maps/api/geocode/json?address=$formattedAddr&key=AIzaSyCrB9Fesgas897MQNawfMd5cSnuyzCxppw";

// $location = json_decode(file_get_contents($googleURL, false), true);

// $long = $location['results'][0]["geometry"]["location"]["lng"];
// $lat = $location['results'][0]["geometry"]["location"]["lat"];

$long = 42.7590162;
$lat = -87.7995495;

$option = array('http' => array('user_agent' => 'finalacsg540'));
$context = stream_context_create($option);

// NOAA requires a context to be set!
$noaaURL = "https://api.weather.gov/points/$long,$lat";
// You will need the gridX, gridY and gridId from here to request the forcast from noaa
$region = json_decode(file_get_contents($noaaURL, false, $context), true);

print_r($region);

?>