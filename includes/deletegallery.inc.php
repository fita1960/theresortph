<?php

require_once 'connect.inc.php';

$sql = "UPDATE gallery set active = '0' WHERE gallery_id='" . $_GET['id'] . "'";

if(mysqli_query($conn, $sql)){
    header("Location: ../adm_gallery.php");
} else{
    header("Location: ../adm_gallery.php");
}


   
    