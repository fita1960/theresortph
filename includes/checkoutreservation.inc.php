<?php

require_once 'connect.inc.php';

$sql = "UPDATE reservation set reservation_status = 'checked-out' WHERE reservation_id='" . $_GET['id'] . "'";

if(mysqli_query($conn, $sql)){
    header("Location: ../adm_reservationlist.php");
} else{
    header("Location: ../adm_reservationlist.php");
}