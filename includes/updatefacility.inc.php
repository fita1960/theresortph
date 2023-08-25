<?php

require_once 'connect.inc.php';

$targetDir = "../img/facility/"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $facility_id = $_POST['facility_id'];
    $facility_name = $_POST['facility_name'];
    $facility_description = $_POST['facility_description'];
    
    $fileName = basename($_FILES["file"]["name"]); 
    $targetFilePath = $targetDir . $fileName; 
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 

    // Allow certain file formats 
    $allowTypes = array('JPG','PNG','JPEG','GIF','WEBP','jpg','png','jpeg','gif','webp'); 

    if(in_array($fileType, $allowTypes)){ 
        // Upload file to server 
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
            // Insert image file name into database 
            $sql = "UPDATE facility SET facility_name='" . $_POST['facility_name'] . "', facility_name='" . $_POST['facility_name'] . "', facility_description='" . $_POST['facility_description'] . "', facility_image='" . $fileName . "' WHERE facility_id='" . $_POST['facility_id'] . "'";
            if(mysqli_query($conn, $sql)){ 
                header("Location: ../adm_facility.php");
            }else{ 
                header("Location: ../adm_facility.php");
            }  
        }else{ 
            header("Location: ../adm_facility.php");
        } 
    }else{ 
        header("Location: ../adm_facility.php");
    } 
}else{ 
    header("Location: ../adm_facility.php");
} 
