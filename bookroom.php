<?php
  include_once 'header.php';
  include_once 'includes/connect.inc.php';

  $room_id = $_POST['room_id'];
  $room_name = $_POST['room_name'];
  $room_amenities = $_POST['room_amenities'];
  $date_start = $_POST['date_start'];
  $date_end = $_POST['date_end'];
  $day_count = $_POST['day_count'];
  $room_price = $_POST['room_price'];
  $grand_total = $_POST['day_count'] * $_POST['room_price'];
?>

<div class="container col-xl-10 col-xxl-8 px-4">
  <div class="row align-items-center g-lg-5 py-5">

    <div class="col-md-10 mx-auto col-lg-5 shadow-lg border rounded-3">
      <form class="py-4" action="includes/book.inc.php" method="post">
        <div class="bg-dark text-center py-1">
          <h5 class="text-white">Reservation Details</h5>
        </div>
        <hr>
        <input type="hidden" class="form-control" id="room_id" name="room_id" value="<?php echo $room_id; ?>" >
        <div class="d-flex justify-content-between">
          <label for="floatingInput">Room Name:</label>
          <span class="fw-bold"><?php echo $room_name; ?></span>
          <input type="hidden" class="form-control" id="room_name" name="room_name" value="<?php echo $room_name; ?>" >
        </div>
        <div class="d-flex justify-content-between">
          <label for="floatingInput">Arrival Date:</label>
          <span class="fw-bold"><?php echo $date_start; ?></span>
          <input type="hidden" class="form-control" id="date_start" name="date_start" value="<?php echo $date_start; ?>" >
        </div>
        <div class="d-flex justify-content-between">
          <label for="floatingInput">Departure Date:</label>
          <span class="fw-bold"><?php echo $date_end; ?></span>
          <input type="hidden" class="form-control" id="date_end" name="date_end" value="<?php echo $date_end; ?>" >
        </div>
        <div class="d-flex justify-content-between">
          <label for="floatingInput">Number of Days:</label>
          <span class="fw-bold"><?php echo $day_count; ?></span>
          <input type="hidden" class="form-control" id="day_count" name="day_count" value="<?php echo $day_count; ?>" >
        </div>
        <div class="d-flex justify-content-between">
          <label for="floatingInput">Room Price:</label>
          <span class="fw-bold"><?php echo $room_price; ?></span>
          <input type="hidden" class="form-control" id="room_price" name="room_price" value="<?php echo $room_price; ?>" >
        </div>
        <hr>
        <div class="d-flex justify-content-between">
          <h5>Grand Total:</h5>
          <h4 class="fw-bold"><?php echo 'P' . $grand_total; ?></h4>
          <input type="hidden" class="form-control" id="grand_total" name="grand_total" value="<?php echo $grand_total; ?>" >
        </div>
        <hr>
        <div class="bg-dark text-center py-1">
          <h5 class="text-white">Booking Form</h5>
        </div>
        <hr>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="guest_lname" name="guest_lname" placeholder="name@example.com" required>
          <label for="floatingInput">Last Name<span class="text-danger">*</span></label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="guest_fname" name="guest_fname" placeholder="name@example.com" required>
          <label for="floatingInput">First Name<span class="text-danger">*</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="guest_address" name="guest_address" placeholder="name@example.com" required>
          <label for="floatingInput">Address<span class="text-danger">*</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="guest_contactno" name="guest_contactno" placeholder="name@example.com" required>
          <label for="floatingInput">Contact Number<span class="text-danger">*</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="guest_email" name="guest_email" placeholder="name@example.com" required>
          <label for="floatingInput">Email<span class="text-danger">*</label>
        </div>
        <div class="form-check text-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
          <label class="form-check-label" for="flexCheckChecked">
            I agree with the Terms and Conditions of The Resort
          </label>
        </div>
        <div class="mt-4 text-center">
          <button class="w-50 btn btn-lg btn-primary" type="submit">Proceed Checkout</button>
        </div>
      </form>
    </div>

  </div>
</div>
   
<?php
  include_once 'footer.php';
?>