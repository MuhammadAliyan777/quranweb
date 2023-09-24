 <?php
$conn = mysqli_connect("localhost","root","","fyp2");

 

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location: ../login.php');
}

if(isset($_POST['update_order'])){

   $order_update_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   $sql = "UPDATE `events_request` SET STATUS = '$update_payment' WHERE ID = '$order_update_id'" or die('query failed');
   $res = mysqli_query($conn,$sql);
    echo '<script>alert("Status Updated Sucessfully!");</script>';
    header('location: events_request.php');

}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $sql = "DELETE FROM `events_request` WHERE ID = '$delete_id'" or die('query failed');
   $res = mysqli_query($conn,$sql);
   header('location:events_request.php');
}

 ?>