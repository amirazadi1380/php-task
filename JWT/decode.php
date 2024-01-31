<?php
require_once "vendor/autoload.php";
require_once(dirname(__FILE__) ."/encode.php");

use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

$jwt_decoded =  JWT::decode($jwt_encoded, new Key($secret_key, "HS256"));

print_r($jwt_decoded);