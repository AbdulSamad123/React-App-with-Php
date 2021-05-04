<?php

//Curl intro
// $ch=curl_init();
// curl_setopt($ch,CURLOPT_URL,"https://www.google.com/");
// curl_exec($ch);
// curl_close($ch);

$url="https://rsac.pk/api/";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result = json_decode($result,true);
echo '<pre>';
print_r($result);


?>