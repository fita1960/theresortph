<?php
    include_once 'includes/connect.inc.php';
    include_once 'adminheader.php';
?>

    <div class="container p-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Reservation ID</th>
                        <th scope="col">Room Name</th>
                        <th scope="col">Date Start</th>
                        <th scope="col">Date End</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $sql = "SELECT reservation.reservation_id, room.room_name, reservation.date_start, reservation.date_end, reservation.grand_total, reservation_status, reservation.amount_paid, reservation.reservation_remarks 
                                FROM reservation INNER JOIN room ON reservation.room_id=room.room_id WHERE room.active='1'";

                        $reservation_list = mysqli_query($conn, $sql);
                        $reservationlistcheck = mysqli_num_rows($reservation_list);
                
                        if ($reservationlistcheck > 0) {
                            while ($rows = mysqli_fetch_assoc($reservation_list)) {
                    ?>
                    <tr>
                        
                        <td><a href="reservationdetails.php?id=<?php echo $rows['reservation_id'] ?>" class="res-details"><?php echo $rows['reservation_id']; ?></a></td>
                        <td><?php echo $rows['room_name']; ?></td>
                        <td><?php echo $rows['date_start']; ?></td>
                        <td><?php echo $rows['date_end']; ?></td>
                        <td><?php echo $rows['reservation_status']; ?></td>
                        
                        <td>

                            <button type="button" class="btn btn-primary" title="Approve" data-bs-toggle="modal" data-bs-target="#approveReservation<?php echo $rows['reservation_id'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                </svg>
                            </button>
                             <button type="button" class="btn btn-danger" title="Disapprove" data-bs-toggle="modal" data-bs-target="#disapproveReservation<?php echo $rows['reservation_id'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                            <a href="includes/checkoutreservation.inc.php?id=<?php echo $rows["reservation_id"]; ?>">
                            <button type="button" class="btn btn-success" title="Checkout">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg>
                            </button>
                            </a>
                            
                        </td>
                    </tr>

    <div class="modal fade" id="approveReservation<?php echo $rows['reservation_id'] ?>" tabindex="-1" aria-labelledby="approveReservationLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="approveReservationLabel">Approve Reservation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="includes/approvereservation.inc.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="reservation_id" name="reservation_id" value="<?php echo $rows['reservation_id']; ?>">
                        <div class="mb-3">
                            <label for="grand_total" class="form-label">Total Amount to be Paid:</label>
                            <input type="text" class="form-control" id="grand_total" name="grand_total" aria-describedby="grand_total" value="<?php echo $rows['grand_total']; ?>">
                        </div> 
                        <div class="mb-3">
                            <label for="amount_paid" class="form-label">Amount Paid:</label>
                            <input type="text" class="form-control" id="amount_paid" name="amount_paid" aria-describedby="amount_paid" value="<?php echo $rows['amount_paid']; ?>">
                        </div>  
                        <div class="mb-3">
                            <label for="reservation_remarks" class="form-label">Remarks:</label>
                            <input type="text" class="form-control" id="reservation_remarks" name="reservation_remarks" aria-describedby="reservation_remarks" value="<?php echo $rows['reservation_remarks']; ?>">
                        </div> 
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Approve Reservation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    
    <div class="modal fade" id="disapproveReservation<?php echo $rows['reservation_id'] ?>" tabindex="-1" aria-labelledby="disapproveReservationLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="disapproveReservationLabel">Disapprove Reservation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="includes/disapprovereservation.inc.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="reservation_id" name="reservation_id" value="<?php echo $rows['reservation_id']; ?>"> 
                        <div class="mb-3">
                            <label for="reservation_remarks" class="form-label">Reason for Disapproval:</label>
                            <input type="text" class="form-control" id="reservation_remarks" name="reservation_remarks" aria-describedby="reservation_remarks" value="<?php echo $rows['reservation_remarks']; ?>">
                        </div> 
                        
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-danger">Disapprove Reservation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 

   
                 
        <?php
                        }
                    }
                ?>
            </tbody>
        </table>
        </div>                   

    </div>
    
    
<?php

include_once('scripts.php');

?>

