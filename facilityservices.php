<?php
  include_once 'header.php'; 
  include_once 'includes/connect.inc.php';

  $sql1 = "SELECT * FROM facility WHERE active='1'";
  $facility_list = mysqli_query($conn, $sql1);
  $facilitylistcheck = mysqli_num_rows($facility_list);

  $sql2 = "SELECT * FROM services WHERE active='1'";
  $service_list = mysqli_query($conn, $sql2);
  $servicelistcheck = mysqli_num_rows($service_list);
?>

<div class="container py-5">
    <div class="text-center pb-3">
      <h1 class="display-5 fw-bold lh-1 mb-3">OUR FACILITIES</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4 pt-2">
        <?php 
          if ($facilitylistcheck > 0) {
            while ($row = mysqli_fetch_assoc($facility_list)) {
            $imageFacilityURL = 'img/facility/'.$row["facility_image"];
        ?>
        <div class="col">
          <div class="card p-3 h-100">
            <img src="<?php echo $imageFacilityURL; ?>" class="card-img-top h-100" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['facility_name']; ?></h5>
                <p class="card-text"><?php echo $row['facility_description']; ?></p>
            </div>
          </div>
        </div>
        <?php 
            }
          }
        ?>
    </div>
</div>

<div class="container-fluid bg-dark py-4">
        <div class="text-center pt-2">
          <h1 class="display-5 fw-bold lh-1 mb-3 text-white">OTHER SERVICES</h1>
        </div>
</div>

<div class="container py-5">

    <div class="row row-cols-1 row-cols-md-2 g-4 pt-2">
      <?php 
          if ($servicelistcheck > 0) {
            while ($row = mysqli_fetch_assoc($service_list)) {
            $imageServiceURL = 'img/service/'.$row["services_image"];
        ?>
        <div class="col">
          <div class="card p-3 h-100">
            <img src="<?php echo $imageServiceURL; ?>" class="card-img-top h-100" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['services_name']; ?></h5>
                <p class="card-text"><?php echo $row['services_description']; ?></p>
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