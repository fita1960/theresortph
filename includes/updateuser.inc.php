<?php

require_once 'connect.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_type = $_POST['user_type'];

    $sql = "UPDATE user SET user_name='" . $_POST['user_name'] . "', user_email='" . $_POST['user_email'] . "', user_password='" . $_POST['user_password'] . "', user_type='" . $_POST['user_type'] . "' WHERE user_id= '" . $_POST['user_id'] . "'";
    // $sql = "UPDATE room_type SET room_type_name='1', room_type_description='2' WHERE room_type_id= '" . $_POST['room_type_id'] . "'";

    if(mysqli_query($conn, $sql)){
        header("Location: ../adm_user.php");
    } else{
        header("Location: ../adm_user.php");
    }
    
}