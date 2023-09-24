<?php 

ob_start();
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
                              <h2>Events Request</h2>
                           </div>
                        </div>
                     </div>
                     <br>
<br>
<section class="placed-orders" style="justify-content: space-between;">

<div class="heading1 margin_0">
                                    <h2>Events Request</h2>
                                 </div>

<div class="box-container">

   <?php
   include "../controller/config.php";
      $order_query = mysqli_query($conn, "SELECT * FROM `events_request`") or die('query failed');
      if(mysqli_num_rows($order_query) > 0){
         while($fetch_orders = mysqli_fetch_assoc($order_query)){
 
    include "./model/events_req.php" 
    ?>
<div class="card" style="border: 1px solid light-grey; ">
  <div class="card-body">
      <p> ID : <span><?php echo $fetch_orders['ID']; ?></span> </p>
      <p> NAME : <span><?php echo $fetch_orders['NAME']; ?></span> </p>
      <p> EMAIL : <span><?php echo $fetch_orders['EMAIL']; ?></span> </p>
      <p> EVENT NAME : <span><?php echo $fetch_orders['EVENT_NAME']; ?></span> </p>
      <p> DECORATION LEVEL : <span><?php echo $fetch_orders['DECORATION']; ?></span> </p>
      <p> VENUE LEVEL : <span><?php echo $fetch_orders['VENUE']; ?></span> </p>
      <p> PERSONS : <span><?php echo $fetch_orders['PERSONS']; ?></span> </p>
      <p> FOOD : <span><?php echo $fetch_orders['FOOD']; ?></span> </p>
      <p> FOOD PACKAGE : <span><?php echo $fetch_orders['PACKAGE']; ?></span> </p>
      <p> PRICE : <span>$<?php echo $fetch_orders['PRICE']; ?>/-</span> </p>
      <form action="" method="post">
            <input type="hidden" name="order_id" value="<?php echo $fetch_orders['ID']; ?>">
            <select class="form-control" name="update_payment">
               <option value="" selected disabled> <?php echo $fetch_orders['STATUS']; ?></option>
               <option value="pending">pending</option>
               <option value="completed">completed</option>
            </select>
            <br>
            <input  type="submit" value="update" class="main_bt" name="update_order" > 
            <a style="margin-left: 5px;" class="main_bt" href="events_request.php?delete=<?php echo $fetch_orders['ID']; ?>" onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
         </form>
      </div>
</div>
<br>
   <?php
    }
   }else{
    echo'
    <div class="heading1 margin_0">
    <h2>No Events Book Yet</h2>
 </div>  '; }
   ?>
</div>

</section>

                     <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                     </div>
                  </div>

                  <?php
                  ob_end_flush();
                  ?>