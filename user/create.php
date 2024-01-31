<?php 
// all of the controller should have header for application/json
//error handler

// header("content-type: application/json");

require_once(dirname(__FILE__) ."/user.model.php");

$name = $_POST["name"];
$price = $_POST["price"];
echo"$name";
echo"$price";

createUser($name, $price);