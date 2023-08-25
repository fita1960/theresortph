<?php

require_once 'connect.inc.php';

$reservation_id = $_POST['reservation_id'];
$amount_paid = $_POST['amount_paid'];
$reservation_remarks = $_POST['reservation_remarks'];

$sql = "UPDATE reservation set reservation_status = 'approved', amount_paid = '" . $amount_paid  . "', reservation_remarks = '" . $reservation_remarks  . "' WHERE reservation_id='" . $_POST['reservation_id'] . "'";

if(mysqli_query($conn, $sql)){
    header("Location: ../adm_reservationlist.php");
} else{
    header("Location: ../adm_reservationlist.php");
}
       
