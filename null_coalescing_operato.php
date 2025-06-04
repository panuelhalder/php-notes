<?php

$default_lat = 23.9;
$default_lon = 90.8;

$user_lat = null ;


//if else:
if(isset($user_lat)){
    $lat = $user_lat;
}else{
    $lat = $default_lat;
}


// Ternary operator:
$lat = isset($user_lat) ? $user_lat : $default_lat;

//null coalescing operator:
$lat = $user_lat ?? $default_lat;



echo $lat;

