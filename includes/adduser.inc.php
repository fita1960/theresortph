<?php

require_once 'connect.inc.php';
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_name = $_POST['user_name'];
    $user_email =  $_POST['user_email'];
    $user_password =  $_POST['user_password'];
    $user_type =  $_POST['user_type'];

    $sql = "INSERT INTO user (user_name, user_email, user_password, user_type) VALUES ('$user_name', '$user_email', '$user_password', '$user_type')";
    
    if(mysqli_query($conn, $sql)){ 
        header("Location: ../adm_user.php");
    }else{ 
        header("Location: ../adm_user.php");
    }
}


    
       
    