<?php
$conn = mysqli_connect("localhost","root","","fyp2");
if(isset($_POST['btn2'])){

    $name1 = mysqli_real_escape_string($conn, $_POST['name']);
    $desc1 = mysqli_real_escape_string($conn, $_POST['desc']);
    $image1 = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name1 = $_FILES['image']['tmp_name'];
    $image_folder1 = 'uploaded_img/'.$image1;
 
    $select_product_name1 = "SELECT DEC_NAME FROM `decoration` WHERE DEC_NAME = '$name1'" or die('query failed');
    $res = mysqli_query($conn,$select_product_name1);
    if(mysqli_num_rows($res) > 0){
        echo "<script>alert('Decoration already added')</script>";
    }else{
       $add_product_query1 = "INSERT INTO `decoration`(DEC_NAME, DESCRIPTION, IMAGE) VALUES('$name1','$desc1', '$image1')" or die('query failed');
       $res = mysqli_query($conn,$add_product_query1);
 
       if($add_product_query1){
          if($image_size > 20000000){
            echo "<script>alert('Image size is too large')</script>";
          }else{
             move_uploaded_file($image_tmp_name1, $image_folder1);
            echo "<script>alert('Decoration added Sucessfully')</script>";
          }
       }else{
          echo "<script>alert('Decoration could not be added!')</script>";
       }
    }
 }
 


 if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_image_query =  "SELECT image FROM `products` WHERE id = '$delete_id'" or die('query failed');
    $res = mysqli_query($conn,$delete_image_query);
    $fetch_delete_image = mysqli_fetch_assoc($res);
    unlink('uploaded_img/'.$fetch_delete_image['image']);
    $sql = "DELETE FROM `products` WHERE id = '$delete_id'" or die('query failed');
    $res = mysqli_query($conn,$sql);
    header('location:admin_products.php');
 }
 
 if(isset($_POST['update_product'])){
 
    $update_p_id = $_POST['update_p_id'];
    $update_name = $_POST['update_name'];
    $update_price = $_POST['update_price'];
 
   $sql1 = "UPDATE `products` SET name = '$update_name', price = '$update_price' WHERE id = '$update_p_id'" or die('query failed');
    $res = mysqli_query($conn,$sql1);
    $update_image = $_FILES['update_image']['name'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_folder = 'uploaded_img/'.$update_image;
    $update_old_image = $_POST['update_old_image'];
 
    if(!empty($update_image)){
       if($update_image_size > 2000000){
          $message[] = 'image file size is too large';
       }else{
          $sql = "UPDATE `products` SET image = '$update_image' WHERE id = '$update_p_id'" or die('query failed');
          $res = mysqli_query($conn,$sql);
          
          move_uploaded_file($update_image_tmp_name, $update_folder);
          unlink('uploaded_img/'.$update_old_image);
       }
    }
 
    header('location:admin_products.php');
 
 }
 
 ?>