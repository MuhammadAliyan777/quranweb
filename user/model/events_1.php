<?php

include "../controller/config.php";

$conn = mysqli_connect("localhost","root","","fyp2");
if (isset($_POST['btn'])) {
    $user_name = $_SESSION['user_name'];
    $user_email = $_SESSION['user_email'];
    $events = $_POST['events'];
    $decoration = $_POST['decoration'];
    $venue = $_POST['venue'];
    $persons = $_POST['persons'];
    $food = $_POST['food'];
    $food_package = $_POST['food_package'];
    
    
    $query = "INSERT INTO `events_request`(`NAME`, `EMAIL`, `EVENT_NAME`, `DECORATION`, `VENUE`, `PERSONS`, `FOOD`, `PACKAGE`, `PRICE`, `STATUS`) VALUES ('$user_name','$user_email','$events','$decoration','$venue','$persons','$food','$food_package','[value-10]','pending')";
    $res = mysqli_query($conn,$query);
        
}
?>
