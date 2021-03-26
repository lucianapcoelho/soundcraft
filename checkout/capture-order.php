<?php

$array = json_decode(file_get_contents('php://input')); //array setted to receive data from index(fetch)
$orderId = $array->orderID;

require_once('access-token.php');

$accessToken = access_token();

$url = "https://api.sandbox.paypal.com/v2/checkout/orders/" . $orderId . "/capture";

$paymentHeaders = array("Content-Type: application/json", "Authorization: Bearer " . $accessToken, "PayPal-Request-Id: 7b92603e-77ed-4896-8e78-5dea2050476a");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $paymentHeaders);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_POST, true);
$run = curl_exec($ch);
curl_close($ch);

file_put_contents("_captureOrder.json", $run);

echo $run;
