<?php
   $conn = mysqli_connect("localhost", "root", "", "fyp2");
if(isset($_POST['update_btn'])){

$update_p_id = $_POST['update_p_id'];
$update_name = $_POST['name'];
$update_desc = $_POST['desc'];

$sql1 = "UPDATE `event` SET EVE_NAME = '$update_name', DESCRIPTION = '$update_desc' WHERE ID = '$update_p_id'" or die('query failed');
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
      $sql = "UPDATE `event` SET IMAGE = '$update_image' WHERE ID = '$update_p_id'" or die('query failed');
      $res = mysqli_query($conn,$sql);
      
      move_uploaded_file($update_image_tmp_name, $update_folder);
      unlink('uploaded_img/'.$update_old_image);
   }
}

header('location:update_event.php');

}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Eventease - Admin Panel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>

   <?php include "header.php"; ?>
   <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>All Opeartions</h2>
                           </div>
                        </div>
                     </div>

                  <h3>Update Events</h3>
        <?php
          $conn = mysqli_connect("localhost", "root", "", "fyp2");
   if(isset($_GET['update'])){
      $update_id = $_GET['update'];
      $update_query = "SELECT * FROM `event` WHERE ID = '$update_id'" or die('query failed');
      $res = mysqli_query($conn,$update_query);
      if(mysqli_num_rows($res) > 0){
         while($fetch_update = mysqli_fetch_assoc($res)){
?>
                     <form method="post" enctype="multipart/form-data"  >
                        <fieldset>
                        <div class="field">
                              <input type = "hidden" class="form-control" value="<?php echo $update_id; ?>" name="update_p_id"  />
                           </div>
                           <div class="field">
                              <input class="form-control" value="<?php echo $fetch_update['EVE_NAME']; ?>" type="text" name="name" placeholder="Decoration Name" />
                           </div>

                           <br>
                           <div class="field">
                              <input class="form-control" value="<?php echo $fetch_update['DESCRIPTION']; ?>" type="text" name="desc" placeholder="Description" />
                           </div>
                      <br>
                      <div class="field">
                              <input name = "update_image" value="<?php echo $fetch_update['IMAGE']; ?>" class="form-control" type="file" accept="image/jpg, image/jpeg, image/png, image/jfif" placeholder="Choose Image" />
                           </div>
                           <br>
                           <div class="field margin_0">
                               
                              <button class="main_bt" name="update_btn">Update Event</button>
                              
</div>
                           
                               
                               
                            
                        </fieldset>
                     </form>
                     <?php
      }
   }
   }else{
    echo "<br><br>";
    echo '<h4>Data Updated</h4> <a href = "view_event.php" style="color: blue;">Event</a>';
   }
?>

</html>
               