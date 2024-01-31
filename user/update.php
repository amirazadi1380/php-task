<?php 
require_once(dirname(__FILE__) ."/user.model.php");
// header("content-type: application/json");

$name = $_POST["name"];
$price = $_POST["price"];
$id = $_POST["id"];
echo"$name";
echo"$price";
echo"$id";
updateUser($id, $name, $price);
echo "succesfully updated";