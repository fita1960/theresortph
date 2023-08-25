<?php
    include_once 'includes/connect.inc.php';
    include_once 'adminheader.php';

    $id = $_GET['id'];

    $sql = "SELECT reservation.reservation_id, room.room_name, reservation.date_start, reservation.date_end, reservation.grand_total, reservation.guest_lname, reservation.guest_fname, reservation.guest_address,
    reservation.guest_contactno, reservation.guest_email, reservation.amount_paid, reservation.reservation_remarks 
    FROM reservation INNER JOIN room ON reservation.room_id=room.room_id WHERE reservation_id='$id'";

    $res_details = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($res_details)
?>

    
    <div class="col-sm-10 mx-auto col-lg-6 p-5 m-5 border rounded-3">
        
        <form action="includes/updatefacility.inc.php" method="post" enctype="multipart/form-data">
            <h3>Reservation Details</h3>
            <hr>
            <input type="hidden" class="form-control" id="reservation_id" name="reservation_id" value="<?php echo $rows['reservation_id']; ?>">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="room_name" name="room_name" value="<?php echo $rows['room_name']; ?>">
                <label for="floatingInput">Room Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="date_start" name="date_start" value="<?php echo $rows['date_start']; ?>">
                <label for="floatingInput">Date Start</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="date_end" name="date_end" value="<?php echo $rows['date_end']; ?>">
                <label for="floatingInput">Date End</label>
            </div>
            <h3>Guest Details</h3>
            <hr>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="guest_fname" name="guest_fname" value="<?php echo $rows['guest_lname']; ?>">
                <label for="floatingInput">Last Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="guest_fname" name="guest_fname" value="<?php echo $rows['guest_fname']; ?>">
                <label for="floatingInput">First Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="guest_address" name="guest_address" value="<?php echo $rows['guest_address']; ?>">
                <label for="floatingInput">Address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="guest_contactno" name="guest_contactno" value="<?php echo $rows['guest_contactno']; ?>">
                <label for="floatingInput">Contact Number</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="guest_email" name="guest_email" value="<?php echo $rows['guest_email']; ?>">
                <label for="floatingInput">Email Address</label>
            </div>
            <h3>Payment Details</h3>
            <hr>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="grand_total" name="grand_total" value="<?php echo $rows['grand_total']; ?>">
                <label for="floatingInput">Total Amount Due</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="amount_paid" name="amount_paid" value="<?php echo $rows['amount_paid']; ?>">
                <label for="floatingInput">Amount Paid</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="reservation_remarks" name="reservation_remarks" value="<?php echo $rows['reservation_remarks']; ?>">
                <label for="floatingInput">Remarks</label>
            </div>
        </form> 
    </div>

<?php
    include_once 'footer.php';
?>