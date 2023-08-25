<?php

require_once 'connect.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $room_type_id = $_POST['room_type_id'];
    $room_type_name = $_POST['room_type_name'];
    $room_type_description = $_POST['room_type_description'];

    $sql = "UPDATE room_type SET room_type_name='" . $_POST['room_type_name'] . "', room_type_description='" . $_POST['room_type_description'] . "' WHERE room_type_id= '" . $_POST['room_type_id'] . "'";
    // $sql = "UPDATE room_type SET room_type_name='1', room_type_description='2' WHERE room_type_id= '" . $_POST['room_type_id'] . "'";

    if(mysqli_query($conn, $sql)){
        header("Location: ../adm_room_type.php");
    } else{
        header("Location: ../adm_room_type.php");
    }
    
}