<?php

require_once 'connect.inc.php';
     
$targetDir = "../img/room_type/"; 
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $room_type_name = $_POST['room_type_name'];
    $room_type_description =  $_POST['room_type_description'];

    $sql = "INSERT INTO room_type (room_type_name, room_type_description) VALUES ('$room_type_name', '$room_type_description')";
    
    if(mysqli_query($conn, $sql)){ 
        header("Location: ../adm_room_type.php");
    }else{ 
        header("Location: ../adm_room_type.php");
    }
}


    
       
    