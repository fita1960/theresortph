<?php

require_once 'connect.inc.php';
 
$targetDir = "../img/facility/"; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!empty($_FILES["file"]["name"])){ 

        $facility_name =  $_POST['facility_name'];
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
                $sql = "INSERT INTO facility (facility_name, facility_description, facility_image) VALUES ('$facility_name', '$facility_description', '$fileName')";
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
} 

   
    