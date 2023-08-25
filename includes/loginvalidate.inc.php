<?php
    session_start();
    include_once 'connect.inc.php';

    if (isset($_POST['user_email']) && isset($_POST['user_password'])){
        function validateData($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $user_email = validateData($_POST['user_email']);
        $user_password = validateData($_POST['user_password']);

        if (empty($user_email)) {
            header("Location: ../login.php?error=Please enter Email Adress!");
            exit();
        } else if (empty($user_password)) {
            header("Location: ../login.php?error=Please enter Password!");
            exit();
        } else {
            $sql = "SELECT * FROM user WHERE user_email='$user_email' && user_password='$user_password' && active = '1'";
            $result = mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['user_email'] === $user_email && $row['user_password'] === $user_password){
                   $_SESSION['user_email'] = $row['user_email'];
                   $_SESSION['user_name'] = $row['user_name'];
                   $_SESSION['user_id'] = $row['user_id'];
                   $_SESSION['user_type'] = $row['user_type'];
                    if($_SESSION['user_type'] === 'admin') {
                        header("Location: ../admin.php");
                        exit();
                   } else {
                        header("Location: ../home.php");
                        exit();
                   }
                } else {
                    header("Location: ../login.php?error=Incorrect Username or Password!");
                    exit();
                }
            }else {
                header("Location: ../login.php?error=Incorrect Username or Password!");
                exit();
            }
        }
    } else {
        header("location: ../login.php");
        exit();
    }
