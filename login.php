<?php
include_once 'header.php';
?>

    <div class="col-sm-10 mx-auto col-lg-4 py-5 px-3 mt-5">
        <form class="p-4 p-md-5 border rounded-3" action="includes/loginvalidate.inc.php" method="post">
            <div class="text-center mb-5">
                <h2>Login</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p style="color: red"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            </div>
            <div class="form-floating mb-3">
                <input type="user_email" class="form-control" id="user_email" name="user_email" placeholder="">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="user_password" name="user_password" placeholder="">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="py-4 text-center">
                <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
            </div>
        </form>
    </div>

<?php
  include_once 'footer.php';
?>