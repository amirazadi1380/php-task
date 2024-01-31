<?php 
header("content-type: application/json");
require_once(dirname(__FILE__) ."/user.model.php");

$id = $_POST["id"];
// echo"$id";

deleteUser($id);