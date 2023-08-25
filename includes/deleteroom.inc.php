<?php

require_once 'connect.inc.php';

$sql = "UPDATE room set active = '0' WHERE room_id='" . $_GET['id'] . "'";

if(mysqli_query($conn, $sql)){
    header("Location: ../adm_room.php");
} else{
    header("Location: ../adm_room.php");
}


   
    