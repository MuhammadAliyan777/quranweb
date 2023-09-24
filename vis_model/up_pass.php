<?php
include "controller/config.php";
session_start();
$email = $_SESSION['email_session'];
if (isset($_POST['btn'])) {
  $pass = md5($_POST['pass']);
  $cpass = md5($_POST['cpass']);
  $email = $_SESSION['email_session'];
 
    if($pass != $cpass){
      echo "<script>alert('confirm password not matched!');</script>";
   }else{
      $reg = "UPDATE `user_tbl` SET `PASS`='$cpass'  WHERE EMAIL = '$email' " or die('query failed');
     $res1 = mysqli_query($conn,$reg);
     echo "<script>alert('Password Updated Successfully');</script>";
      header('location:login.php');
   }
  }
echo $email;



?>