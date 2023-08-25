<?php
  include_once 'header.php';
  include_once 'includes/connect.inc.php';

  $sql = "SELECT * FROM gallery WHERE active='1'";
  $gallery_list = mysqli_query($conn, $sql);
  $gallerylistcheck = mysqli_num_rows($gallery_list);
?>

<div class="container py-5">
  <div class="text-center pb-3">
    <h1 class="display-5 fw-bold lh-1 mb-3">GALLERY</h1>
  </div>
  
  <div class="row row-cols-1 row-cols-md-3 g-4 pt-2">
      <?php 
        if ($gallerylistcheck > 0) {
          while ($row = mysqli_fetch_assoc($gallery_list)) {
          $imageGalleryURL = 'img/gallery/'.$row["gallery_image"];
      ?>
      <div class="col">
        <div class="card p-3 h-100">
          <img src="<?php echo $imageGalleryURL; ?>" class="card-img-top h-100" alt="...">
        </div>
      </div>
      <?php 
          }
        }
      ?>      
  </div>
</div>

<?php
  include_once('footer.php');
?>