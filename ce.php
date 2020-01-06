<?php

header('Access-Control-Allow-Origin:*');
require ('RASRsdk.php');



$file = file_get_contents('php://input');
$time=time();
$res = file_put_contents($time.'.wav', $file);


Config::$ENGINE_MODEL_TYPE = "16k_0";

$filepath = $time.'.wav';
$result = sendvoice($filepath, false);
$rest = json_decode($result,true);

echo $rest['text'];