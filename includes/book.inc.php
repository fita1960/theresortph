<?php

function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
    echo "<script>window.location= '../index.php';</script>";
}

require_once 'connect.inc.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $room_id =  $_POST['room_id'];
    $date_start = $_POST['date_start'];
    $date_end =  $_POST['date_end'];
    $day_count =  $_POST['day_count'];
    $grand_total =  $_POST['grand_total'];
    $guest_lname = $_POST['guest_lname'];
    $guest_fname = $_POST['guest_fname'];
    $guest_address = $_POST['guest_address'];
    $guest_contactno = $_POST['guest_contactno'];
    $guest_email = $_POST['guest_email'];

    $sql = "INSERT INTO reservation (room_id, date_start, date_end, day_count, grand_total, guest_lname, guest_fname, guest_address, guest_contactno, guest_email) 
    VALUES ('$room_id', '$date_start', '$date_end', '$day_count', '$grand_total', '$guest_lname', '$guest_fname', '$guest_address', '$guest_contactno', '$guest_email')";
        
        if(mysqli_multi_query($conn, $sql)){ 
            function_alert("Room booked successfully! Please send us your proof of payment (25% of total price) within 2 days via messenger or email us at theresort@gmail.com for us to confirm your booking. ");
            
        }else{ 
            header("Location: ../index.php");
    }
} 
