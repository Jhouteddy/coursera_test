<?php
$city = $_GET["city"];

$city = str_replace(" ", "-", $city);

$contents = file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

preg_match("/\"phrase\">(.*?)<\/span>/i", $contents, $matches);

echo $matches[1];
?>