<?php

$conn = mysqli_connect("localhost","root","","fyp2");

$sql = "SELECT * FROM  `user_tbl`";
$res = mysqli_query($conn,$sql);

$sql1 = "SELECT * FROM `contact_tbl`";
$res1 = mysqli_query($conn,$sql1);

$sql2 = "SELECT * FROM `feedback_tbl`";
$res2 = mysqli_query($conn,$sql2);

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $sql = "DELETE FROM `user_tbl` WHERE ID = '$delete_id'" or die('query failed');
    $res1 = mysqli_query($conn,$sql);
    header('Location: ../tables.php');
 }

 ?>
