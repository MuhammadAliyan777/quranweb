<?php

include 'controller/config.php';
session_start();

if(isset($_POST['btn'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['pass']));
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Please Enter Valid Email ID');</script>";
      }
   $select_users = "SELECT * FROM `user_tbl` WHERE EMAIL = '$email' AND PASS = '$pass'" or die('query failed');
   $res = mysqli_query($conn,$select_users);
   if(mysqli_num_rows($res) > 0){

      $row = mysqli_fetch_assoc($res);

      if($row['ROLE'] == 'admin'){

         $_SESSION['admin_name'] = $row['NAME'];
         $_SESSION['admin_email'] = $row['EMAIL'];
         $_SESSION['admin_id'] = $row['ID'];
         header('location: admin/index.php');

      }
    
      elseif($row['ROLE'] == 'user'){

         $_SESSION['user_name'] = $row['NAME'];
         $_SESSION['user_email'] = $row['EMAIL'];
         $_SESSION['user_id'] = $row['ID'];
         header('location: user/index.php');

      }

   }else{
    echo "<script>alert('Incorrect Email Or  Password');</script>";
   }

}

?>