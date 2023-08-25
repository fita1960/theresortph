<?php

require_once 'connect.inc.php';

$targetDir = "../img/room/"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $room_id = $_POST['room_id'];
    $room_name = $_POST['room_name'];
    $room_type_id = $_POST['room_type_id'];
    $room_price = $_POST['room_price'];
    $room_adult_count = $_POST['room_adult_count'];
    $room_child_count = $_POST['room_child_count'];
    $room_amenities = $_POST['room_amenities'];
    
    $fileName = basename($_FILES["file"]["name"]); 
    $targetFilePath = $targetDir . $fileName; 
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 

    // Allow certain file formats 
    $allowTypes = array('JPG','PNG','JPEG','GIF','WEBP','jpg','png','jpeg','gif','webp'); 

    if(in_array($fileType, $allowTypes)){ 
        // Upload file to server 
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
            // Insert image file name into database 
            $sql = "UPDATE room SET room_name='" . $_POST['room_name'] . "', room_type_id='" . $_POST['room_type_id'] . "', room_price='" . $_POST['room_price'] . "', room_adult_count='" . $_POST['room_adult_count'] . "', room_child_count='" . $_POST['room_child_count'] . "', room_amenities='" . $_POST['room_amenities'] . "', room_image='" . $fileName . "' WHERE room_id= '" . $_POST['room_id'] . "'";
            if(mysqli_query($conn, $sql)){ 
                header("Location: ../adm_room.php");
            }else{ 
                header("Location: ../adm_room.php");
            }  
        }else{ 
            header("Location: ../adm_room.php");
        } 
    }else{ 
        header("Location: ../adm_room.php");
    } 
}else{ 
    header("Location: ../adm_room.php");
} 
