<?php

function access_token()
{
  $clientId = 'AfDcR6piL_NbVii_xr58DOOlItnbZ_w0D2PLVP3D-e1jkl52CP9iQThXk7yeZDBQ4gKFz57N_XfdaCEY';
  $secret = 'ENRHImYsaFJNL_wKvpuMZb1NQhg4akJwWfIvY-3nkZiZAn8LZUbhxLAAi355Ca51s5km9n73tRpbHwOo';
  $url = "https://api.sandbox.paypal.com/v1/oauth2/token";


  $headers = array(
    "Accept" => "application/json",
    "Accept-Language" => "en_US",
    "Content-Type" => "application/x-www-form-urlencoded",
  );
  $postfields = "grant_type=client_credentials";
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);

  curl_setopt($ch, CURLOPT_USERPWD, $clientId . ":" . $secret);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  curl_setopt($ch, CURLOPT_VERBOSE, 1);
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_POST, true);


  $result = curl_exec($ch);

  if (empty($result)) die("Error: No response.");
  else {
    $json = json_decode($result);
    file_put_contents('_access_token_log.json', $result);
    //return access token to be used for this transaction
    return $json->access_token;
  }

  curl_close($ch);
}

access_token();
