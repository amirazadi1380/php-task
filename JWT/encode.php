<?php
require_once "vendor/autoload.php";
  
use \Firebase\JWT\JWT;
$name = $_POST["name"];
$price = $_POST["price"];

$secret_key="safesafe";
$payload = array( 
  "time" => time(),
   "exp"=> strtotime("+1 hour"),
   "name"=> $name,
   "price"=>$price,
 ) ;
$jwt_encoded = JWT::encode($payload,$secret_key,"HS256");
echo $jwt_encoded;