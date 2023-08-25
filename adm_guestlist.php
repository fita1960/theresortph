<?php
    include_once 'includes/connect.inc.php';
    include_once 'adminheader.php';
?>

    <div class="container p-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $sql = "SELECT DISTINCT * FROM reservation";

                        $guest_list = mysqli_query($conn, $sql);
                        $guestlistcheck = mysqli_num_rows($guest_list);
                
                        if ($guestlistcheck > 0) {
                            while ($rows = mysqli_fetch_assoc($guest_list)) {
                    ?>
                    <tr>
                        
                        <td><?php echo $rows['guest_lname']; ?></td>
                        <td><?php echo $rows['guest_fname']; ?></td>
                        <td><?php echo $rows['guest_address']; ?></td>
                        <td><?php echo $rows['guest_contactno']; ?></td>
                        <td><?php echo $rows['guest_email']; ?></td>
                    </tr>
   
                 
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

