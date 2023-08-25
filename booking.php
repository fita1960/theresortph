<?php
  include_once 'header.php';
  include_once 'includes/connect.inc.php';
?>
  
<div class="col-sm-12 mx-auto col-lg-4 p-5 m-5 border">
  <div class="text-center pb-4">
    <h4>Check Room Availability</h4>
  </div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
      <div class="mb-4">
          <label for="date_start" class="form-label fw-bold">From:</label>
          <input type="date" class="form-control" id="date_start" name="date_start" required>
      </div>
      <div class="mb-4">
          <label for="date_end" class="form-label fw-bold">To:</label>
          <input type="date" class="form-control" id="date_end" name="date_end" required>
      </div>
      <input type="hidden" name="day_count" id="day_count">
      <div class="mb-1 text-center">
          <button type="submit" name="submit" class="btn btn-primary" onclick="calculateDays();">Check Availability</button>
      </div>
  </form>
</div>

<div class="container py-5">
    

    <div class="row row-cols-1 row-cols-md-2 g-4 pt-2">
        <?php 
        
        if(!empty($_GET['date_start']) && !empty($_GET['date_end'])) {
          
        $date_start = $_GET['date_start'];
        $date_end = $_GET['date_end'];
        $day_count = $_GET['day_count'];

        $sql = "SELECT *
        FROM room
        WHERE room_id NOT IN (
            SELECT DISTINCT room_id
            FROM reservation
            WHERE (date_start <= '$date_end') AND (date_end >= '$date_start') AND (reservation_status = 'approved' OR reservation_status = 'pending')
        ) AND active='1'";

        $available_room_list = mysqli_query($conn, $sql);
        $available_room_list_check = mysqli_num_rows($available_room_list);

        if ($available_room_list_check > 0) {
          while ($row = mysqli_fetch_assoc($available_room_list)) {
          $room_id = $row["room_id"];
          $room_name = $row["room_name"];
          $availableRoomsURL = 'img/room/'.$row["room_image"];

        ?>

        <div class="col">
          <div class="card p-3">
            <form action="bookroom.php" method="post">
                <img src="<?php echo $availableRoomsURL; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">
                    <input type="hidden" name="date_start" value="<?php echo $date_start; ?>">
                    <input type="hidden" name="date_end" value="<?php echo $date_end; ?>">
                    <input type="hidden" name="room_name" value="<?php echo $row['room_name']; ?>">
                    <input type="hidden" name="room_amenities" value="<?php echo $row['room_amenities']; ?>">
                    <input type="hidden" name="day_count" value="<?php echo $day_count; ?>">
                    <input type="hidden" name="room_price" value="<?php echo $row['room_price']; ?>">
                    <h5 class="card-title"><?php echo $row['room_name']; ?></h5>
                    <p><span class="fw-bold">Amenities:</span> <?php echo $row['room_amenities']; ?></p>
                    <p><span class="fw-bold">Room Price:</span> <?php echo $row['room_price']; ?> per day</p>
                    <input type="submit" name="submit" class="btn-primary rounded p-2" value="Book Room">
                </div>
            </form>
          </div>
        </div>

        <?php 
            }
          } else {
            echo "No records found!";
          }
        } 

        ?>
    </div>
</div>      

<script>
  function calculateDays() {
    var date_start = document.getElementById("date_start").value;
    var date_end = document.getElementById("date_end").value;

    const ds = new Date(date_start);
    const de = new Date(date_end);

    const time = Math.abs(de - ds);
    const days = Math.ceil(time / (1000 * 60 * 60 * 24));

    document.getElementById("day_count").value = days;

  };
</script>

<?php
  include_once('footer.php');
?>