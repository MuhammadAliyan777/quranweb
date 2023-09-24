<?php

session_start();
$otp = $_SESSION['otp'];
$email_session = $_SESSION['email_session'];
if (isset($_POST['btn'])) {
    $user_otp = $_POST['otp'];

    if($otp == $user_otp)
    {
        
    
        header('location: c_pass.php');
    }
    else{
        echo'<script>alert("Wrong Otp")</script>';
    }
}
?>