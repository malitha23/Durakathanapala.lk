<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');


    //open connection to mysql db
    $connection = mysqli_connect("localhost","durakathanapala_phonesite","50cqT)Wqd3ZA","durakathanapala_phone") or die("Error " . mysqli_error($connection));
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password' ";
    $result = mysqli_query($connection,$sql);
    $count = mysqli_num_rows($result);
    
    if($count == 1){
        echo json_encode("Success");
    }else{
        echo json_encode("Error");
    }
?>