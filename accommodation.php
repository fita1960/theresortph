<?php
  include_once 'header.php';
  include_once 'includes/connect.inc.php';

  $sql = "SELECT * FROM room_type WHERE active='1'";
  $room_type_list = mysqli_query($conn, $sql);
  $roomtypelistcheck = mysqli_num_rows($room_type_list);

?>

<div class="text-center pt-5">
    <a href="booking.php">
      <button type="button" class="btn btn-primary btn-lg fw-bold rounded-3">BOOK NOW</button>
    </a>
</div>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
      <h2 class="display-6 fw-bold lh-1 mb-5 text-center text-lg-start">CHECK-IN / CHECK-OUT DETAILS:</h2>
      <div class="col-lg-6">
          <p class="fs-5 text-center text-lg-start">
          <span class="fw-bold">* CHECK-IN: </span>2:00 PM
          <br>
          <span class="fw-bold">* CHECK-OUT: </span>12:00 NN
          <br>
          <span class="fw-bold">* NO SMOKING </span>
          <br>
          <span class="fw-bold">* NO PETS ALLOWED </span>
          </p>
      </div>
    </div>
    <div class="col-md-10 mx-auto col-lg-5">
      <img src="img/resort_logo.png" class="d-block mx-lg-auto img-fluid shadow-lg p-3 mb-6 bg-body rounded mt-5" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
  </div>
</div>

<div class="container-fluid bg-dark py-4">
    <div class="text-center pt-2">
      <h1 class="display-5 fw-bold lh-1 mb-3 text-white">SLEEPING ARRANGEMENTS</h1>
    </div>
</div>

<div class="container py-5">
  <div class="row row-cols-1 row-cols-md-3 g-4 pt-2">
      <?php 
        if ($roomtypelistcheck > 0) {
          while ($row = mysqli_fetch_assoc($room_type_list)) {
          $imageRoomTypeURL = 'img/room_type/'.$row["room_type_image"];
      ?>
      <div class="col">
        <div class="card p-3 h-100">
          <img src="<?php echo $imageRoomTypeURL; ?>" class="card-img-top h-100" alt="...">
          <div class="card-body">
              <h5 class="card-title"><?php echo $row['room_type_name']; ?></h5>
              <p class="card-text"><?php echo $row['room_type_description']; ?></p>
          </div>
        </div>
      </div>
      <?php 
          }
        }
      ?>      
  </div>
</div>
    
   
<?php
  include_once 'footer.php';
?>