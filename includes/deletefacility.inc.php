<?php

require_once 'connect.inc.php';

$sql = "UPDATE facility set active = '0' WHERE facility_id='" . $_GET['id'] . "'";

if(mysqli_query($conn, $sql)){
    header("Location: ../adm_facility.php");
} else{
    header("Location: ../adm_facility.php");
}
       

   
    