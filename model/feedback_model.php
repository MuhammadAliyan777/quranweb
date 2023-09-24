<?php
include 'controller/config.php';

if(isset($_POST['btn']))
{
$name = $_POST['name'];
$feedback = $_POST['feedback'];
$sql = "INSERT INTO `feedback_tbl` (`NAME`,`FEEDBACK`) VALUES ('$name','$feedback')";
$res = mysqli_query($conn,$sql);

}


?>