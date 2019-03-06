<?php
include 'config.php';

header(' Content-type:index/html; charset=utf8' );
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST")
{
  $name = stripslashes(htmlspecialchars($_POST['name']));
  echo '<pre>'; print_r($name); echo '</pre>';
  $phone = stripslashes(htmlspecialchars($_POST['phone']));
  echo '<pre>'; print_r($phone); echo '</pre>';
 
$headers = array(
    'Authorization: Bearer '.$token,
    'Accept: application/json',
    'Content-Type: application/x-www-form-urlencoded'
);
 
$postfields = array(
    'name' => $name,
    'phone' => $phone,
    'uid' => $uid
);
 
$curl = curl_init( 'https://drop1.top/api/orders' );
curl_setopt( $curl, CURLOPT_HTTPHEADER, $headers );
curl_setopt( $curl, CURLOPT_HEADER, false );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_POST, true );
curl_setopt( $curl, CURLOPT_POSTFIELDS, http_build_query( $postfields ) );
$json = curl_exec( $curl );
print_r( json_decode( $json, true ) );
curl_close( $curl );
 

    header('Location: thanks.html');
    exit;
}