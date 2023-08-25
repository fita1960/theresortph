<?php

require_once 'connect.inc.php';

$sql = "UPDATE user set active = '0' WHERE user_id='" . $_GET['id'] . "'";

if(mysqli_query($conn, $sql)){
    header("Location: ../adm_user.php");
} else{
    header("Location: ../adm_user.php");
}