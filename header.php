<?php

session_start();
if(isset($_SESSION['username'])){
    echo "you logged in as </br>", $_SESSION['username'];
    echo "<br/><a href='logout.php'>logout</a>";
}else{
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Resort</title>

    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

    <style>
        /* Set the border color */
         
        .custom-toggler.navbar-toggler {
            border-color: white;
        }
        /* Setting the stroke to green using rgb values (0, 128, 0) */
         
        .custom-toggler .navbar-toggler-icon {
            background-image: url(
        "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
    </style>
    
</head>
<body>
    
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3">
        <div class="container">
          <div class="col-3">
          <a href="index.php"><img src="img/header_logo.png" class="img-fluid w-50 p-0" alt=""></a>
          </div>
          <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php" style="color: white">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="accommodation.php" style="color: white">Accomodations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="facilityservices.php" style="color: white">Facilities & Other Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php" style="color: white">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php" style="color: white">Contact Us</a>
              </li>
              <!--<li class="nav-item">-->
              <!--  <a class="nav-link" href="login.php" style="color: white">Login</a>-->
              <!--</li>-->
              <li class="nav-item ps-5">
                <a href="booking.php">
                  <button type="button" class="btn btn-primary btn-lg fw-bold rounded-3">BOOK NOW</button>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</div>