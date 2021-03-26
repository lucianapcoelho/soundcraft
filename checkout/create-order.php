<?php
file_put_contents('_post.json', file_get_contents('php://input')); // save data from form in log
$receive = file_get_contents('php://input'); // var "receive" gets values from form
file_put_contents("_getTypeReceive.txt", gettype($receive));

$arr = json_decode($receive);

$firstName = $arr->firstName;
$lastName = $arr->lastName;
$city = $arr->city;
$street = $arr->street;
$zip = $arr->zip;
$tel = $arr->tel;
$state = $arr->state;
$email = $arr->email;

require_once('access-token.php');
//get access token 
$accessToken = access_token();

//declaring request parts

$url = "https://api.sandbox.paypal.com/v2/checkout/orders";

$paymentHeaders = array("Content-Type: application/json", "Authorization: Bearer " . $accessToken);

$value = "1200";
$currency_code = "USD";
$fullName = $firstName . $lastName;
$postfields = '{
  "intent": "CAPTURE",
   "purchase_units": [ 
    {
      "amount": {
        "currency_code": "' . $currency_code . '", 
        "value": "' . $value . '" 
      }
    }
    
  ],
   "shipping_address": {
           "recipient_name": "' . $fullName . '",  
           "line1": "' . $street . '",
           "line2": "none",
           "city": "' . $city . '",
           "country_code": "US",
           "postal_code": "' . $zip . '",
           "phone": "' . $tel . '",
           "state": "' . $state . '"
         }
}, payer: {
      name: {
        given_name: "' . $firstName . '",
        surname: "' . $lastName . '",
      },
      email_address: "' . $email . '",
      phone: {
        phone_number: {
          national_number: "' . $tel . '",
        },
      },
    },   
  }, application_context: {
      brand_name: "Soundcraft",
      locale: "en-US",
      shipping_preference: "SET_PROVIDED_ADDRESS",
      return_url: "https://example.com/return",
      cancel_url: "https://example.com/cancel"
    },purchase_units: [
      {
        reference_id: "25022021",
        soft_descriptor: "Soundcraft",
        amount: {
          currency_code: "USD",
          value: "' . $value . '",
          breakdown: {
            item_total: {
              currency_code: "USD",
              value: "' . $value . '"
            },
            shipping: {
              currency_code: "USD",
              value: "0"
           }
          }
        }';


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $paymentHeaders);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_POST, true);
$run = curl_exec($ch);
curl_close($ch);

//save responde in log
file_put_contents("_create_order.json", $run);

echo $run;
