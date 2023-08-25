<?php

require_once 'connect.inc.php';

$reservation_id = $_POST['reservation_id'];
$reservation_remarks = $_POST['reservation_remarks'];

$sql = "UPDATE reservation set reservation_status = 'disapproved', reservation_remarks = '" . $reservation_remarks . "' WHERE reservation_id='" . $_POST['reservation_id'] . "'";

if(mysqli_query($conn, $sql)){
    header("Location: ../adm_reservationlist.php");
} else{
    header("Location: ../adm_reservationlist.php");
}
       
