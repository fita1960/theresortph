<?php

require_once 'connect.inc.php';
 
$targetDir = "../img/service/"; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!empty($_FILES["file"]["name"])){ 

        $services_name =  $_POST['services_name'];
        $services_description = $_POST['services_description'];

        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('JPG','PNG','JPEG','GIF','WEBP','jpg','png','jpeg','gif','webp'); 

        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $sql = "INSERT INTO services (services_name, services_description, services_image) VALUES ('$services_name', '$services_description', '$fileName')";
                if(mysqli_query($conn, $sql)){ 
                    header("Location: ../adm_service.php");
                }else{ 
                    header("Location: ../adm_service.php");
                }  
            }else{ 
                header("Location: ../adm_service.php");
            } 
        }else{ 
            header("Location: ../adm_service.php");
        } 
    }else{ 
        header("Location: ../adm_service.php");
    } 
} 

   
    