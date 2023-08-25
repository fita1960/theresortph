<?php
include_once 'includes/connect.inc.php';
include_once 'adminheader.php';
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
?>

<div class="container">
  <h2 class="my-4">Welcome, 
    <?php 
      echo $_SESSION['user_name'];
    ?>!
  </h2>
    
  <div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
    <a href="adm_room.php" style="text-decoration: none;">
      <div class="col">
        <?php

          $r_sql = "SELECT * FROM room WHERE active='1'";

          if ($r_result = mysqli_query($conn, $r_sql)) {

              $r_rowcount = mysqli_num_rows($r_result);
              
          }

        ?>
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/maint_icon.png" class="img-fluid rounded-start py-5 px-3" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body text-center">
                <h5 class="card-title">Rooms</h5>
                <h1 class="card-text display-1 fw-bold pt-2"><?php echo $r_rowcount; ?></h1>
              </div>
            </div>
          </div>
        </div>

      </div>
    </a>
    
    <a href="adm_room_type.php" style="text-decoration: none;">
    <div class="col">
    <?php

      $rt_sql = "SELECT * FROM room_type WHERE active='1'";

      if ($rt_result = mysqli_query($conn, $rt_sql)) {

          $rt_rowcount = mysqli_num_rows($rt_result);
          
      }

    ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
          <img src="img/maint_icon.png" class="img-fluid rounded-start py-5 px-3" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center">
              <h5 class="card-title">Room Types</h5>
              <h1 class="card-text display-1 fw-bold pt-2"><?php echo $rt_rowcount; ?></h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    </a>

    <a href="adm_facility.php" style="text-decoration: none;">
    <div class="col">
    <?php

      $f_sql = "SELECT * FROM facility WHERE active='1'";

      if ($f_result = mysqli_query($conn, $f_sql)) {

          $f_rowcount = mysqli_num_rows($f_result);
          
      }

    ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
          <img src="img/maint_icon.png" class="img-fluid rounded-start py-5 px-3" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center">
              <h5 class="card-title">Facilities</h5>
              <h1 class="card-text display-1 fw-bold pt-2"><?php echo $f_rowcount; ?></h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    </a>

    <a href="adm_service.php" style="text-decoration: none;">
    <div class="col">
    <?php

      $s_sql = "SELECT * FROM services WHERE active='1'";

      if ($s_result = mysqli_query($conn, $s_sql)) {

          $s_rowcount = mysqli_num_rows($s_result);
          
      }

    ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
          <img src="img/maint_icon.png" class="img-fluid rounded-start py-5 px-3" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center">
              <h5 class="card-title">Services</h5>
              <h1 class="card-text display-1 fw-bold pt-2"><?php echo $s_rowcount; ?></h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    </a>

    <a href="adm_gallery.php" style="text-decoration: none;">
    <div class="col">
    <?php

      $g_sql = "SELECT * FROM gallery WHERE active='1'";

      if ($g_result = mysqli_query($conn, $g_sql)) {

          $g_rowcount = mysqli_num_rows($g_result);
          
      }

    ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
          <img src="img/gallery_icon.png" class="img-fluid rounded-start py-5 px-3" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center">
              <h5 class="card-title">Gallery</h5>
              <h1 class="card-text display-1 fw-bold pt-2"><?php echo $g_rowcount; ?></h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    </a>

    <a href="adm_user.php" style="text-decoration: none;">
    <div class="col">
    <?php

      $u_sql = "SELECT * FROM user WHERE active='1'";

      if ($u_result = mysqli_query($conn, $u_sql)) {

          $u_rowcount = mysqli_num_rows($u_result);
          
      }

    ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
          <img src="img/user_icon.png" class="img-fluid rounded-start py-5 px-3" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center">
              <h5 class="card-title">Users</h5>
              <h1 class="card-text display-1 fw-bold pt-2"><?php echo $u_rowcount; ?></h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    </a>

    <a href="adm_reservationlist.php" style="text-decoration: none;">
    <div class="col">
    <?php

      $sql = "SELECT * FROM reservation WHERE active='1'";

      if ($result = mysqli_query($conn, $sql)) {

          $rowcount = mysqli_num_rows($result);
          
      }

    ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
          <img src="img/res_icon.png" class="img-fluid rounded-start py-5 px-3" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center">
              <h5 class="card-title">Reservations</h5>
              <h1 class="card-text display-1 fw-bold pt-2"><?php echo $rowcount; ?></h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    </a>

  </div>

</div>
  

<?php
}else {
  header("Location: admin.php");
  exit();
}

?>
