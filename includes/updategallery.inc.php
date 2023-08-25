<?php

require_once 'connect.inc.php';

$targetDir = "../img/gallery/"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $gallery_id = $_POST['gallery_id'];
    $gallery_name = $_POST['gallery_name'];
    
    $fileName = basename($_FILES["file"]["name"]); 
    $targetFilePath = $targetDir . $fileName; 
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 

    // Allow certain file formats 
    $allowTypes = array('JPG','PNG','JPEG','GIF','WEBP','jpg','png','jpeg','gif','webp'); 

    if(in_array($fileType, $allowTypes)){ 
        // Upload file to server 
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
            // Insert image file name into database 
            $sql = "UPDATE gallery SET gallery_name='" . $_POST['gallery_name'] . "', gallery_image='" . $fileName . "' WHERE gallery_id='" . $_POST['gallery_id'] . "'";
            if(mysqli_query($conn, $sql)){ 
                header("Location: ../adm_gallery.php");
            }else{ 
                header("Location: ../adm_gallery.php");
            }  
        }else{ 
            header("Location: ../adm_gallery.php");
        } 
    }else{ 
        header("Location: ../adm_gallery.php");
    } 
}else{ 
    header("Location: ../adm_gallery.php");
} 
