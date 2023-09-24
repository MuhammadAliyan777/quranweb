<?php
include "controller/config.php";
if (isset($_POST['btn'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pass = md5($_POST['pass']);
  $cpass = md5($_POST['cpass']);

  $check = "SELECT * FROM `user_tbl` WHERE EMAIL = '$email'";
  $res = mysqli_query($conn,$check);
  if(mysqli_num_rows($res) > 0)
  {
    echo "<script>alert('User already exists');</script>";
  }
  else{
    if($pass != $cpass){
      echo "<script>alert('confirm password not matched!');</script>";
   }else{
      $reg = "INSERT INTO `user_tbl`(NAME, PHONE, EMAIL, PASS, ROLE) VALUES('$name', '$phone', '$email', '$cpass','user')" or die('query failed');
     $res1 = mysqli_query($conn,$reg);
     echo "<script>alert('Reistered Successfully');</script>";
      header('location:login.php');
   }
  }
}



?>