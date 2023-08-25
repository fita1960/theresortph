<?php

require_once 'connect.inc.php';

$sql = "UPDATE services set active = '0' WHERE services_id='" . $_GET['id'] . "'";

if(mysqli_query($conn, $sql)){
    header("Location: ../adm_service.php");
} else{
    header("Location: ../adm_service.php");
}
       

   
    