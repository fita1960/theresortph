<?php

require_once 'connect.inc.php';

$sql = "UPDATE room_type set active = '0' WHERE room_type_id='" . $_GET['id'] . "'";

if(mysqli_query($conn, $sql)){
    header("Location: ../adm_room_type.php");
} else{
    header("Location: ../adm_room_type.php");
}


   
    