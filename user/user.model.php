<?php
// header("content-type: application/json");
// header("Access-Control-Allow-Origin:*");

// if($_SERVER['REQUEST_METHOD'] === "GET") die(json_encode(array("status"=> "failed","message"=> "Invalid method use POST method")));

$conn = mysqli_connect("localhost", "root", "", "fruit_sell");

function getAllUser(){
    global $conn;
    $sql = "SELECT * from products";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $users = [];
    while($row = mysqli_fetch_array($result)){
        $users[] = $row;
    }
    return $users;
}

function createUser ($name,$price){
    global $conn;
    if (mysqli_query($conn,"INSERT INTO products (name,price) VALUES ('$name', $price)")){
        echo json_encode(array("status"=> "success","message"=> "user created succesfully"));
    }
    else{
        echo "not okkkkk";
    }
}
function deleteUser ($id){
    global $conn;
    if (mysqli_query($conn,"DELETE FROM products where id = $id")){
        echo json_encode(array("status"=> "success","message"=> "user created succesfully"));
    }
    else{
        echo "not okkkkk";
    }
}
function updateUser ($id, $name="", $price="" ){
    global $conn;
    $user = getUser($id);
    $sql = "UPDATE products SET name = '$name',  price = $price WHERE id = $id";
    
    if ($name = ""){
        $name = $user['name'];
    }
    if ($price = ""){
        $price = $user['price'];
    }
    if (mysqli_query($conn,$sql)){

        echo json_encode(array("status"=> "success","message"=> "user created succesfully"));
    }
    else{
        echo "not okkkkk";
    }
}

function getUser ($id){
    global $conn;
    $sql = "SELECT * from products where id = $id";
    $result =  mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($result);
    echo json_encode($user);
    return $user;
}

// $sql = "SELECT * FROM products";

// $result = mysqli_query($conn, $sql);
// $allData = [];
// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $allData[] = $row;
//     }

// }
// echo json_encode($allData);


