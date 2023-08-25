<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Resort</title>

    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

  </head>
<body>

<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3">
        <div class="container">
          <div class="col-3">
            <a href="admin.php"><img src="img/header_logo.png" class="img-fluid w-50 p-0" alt=""></a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="admin.php">Home</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Maintenance
              </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="adm_room.php">Rooms</a></li>
                  <li><a class="dropdown-item" href="adm_room_type.php">Room Types</a></li>
                  <li><a class="dropdown-item" href="adm_facility.php">Facilities</a></li>
                  <li><a class="dropdown-item" href="adm_service.php">Services</a></li>
                  <li><a class="dropdown-item" href="adm_gallery.php">Gallery</a></li>
                  <li><a class="dropdown-item" href="adm_user.php">Users</a></li>
                </ul>
              </li>
              <li class="nav-item">
              <a class="nav-link text-white" href="adm_reservationlist.php">Reservation List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="adm_guestlist.php">Guest List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="includes/logout.inc.php">Logout</a>
            </li>
            </ul>
          </div>
        </div>
    </nav>
</div>