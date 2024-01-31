<?php
require_once(dirname(__FILE__) ."/user.model.php");


$id = $_POST["id"];

getUser($id);
