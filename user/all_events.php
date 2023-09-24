<!DOCTYPE html>
<html lang="en">
   <head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
<link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">

<script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
   </head>
<?php
include "head.php";
?>
<br>
<br>
<section class="placed-orders" style="justify-content: space-between;">

<div class="heading1 margin_0">
                                    <h2>Events Request</h2>
                                 </div>

<div class="box-container">

   <?php
   include "../controller/config.php";
      $order_query = mysqli_query($conn, "SELECT * FROM `events_request` WHERE `EMAIL` = '$user_email'") or die('query failed');
      if(mysqli_num_rows($order_query) > 0){
         while($fetch_orders = mysqli_fetch_assoc($order_query)){
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
      <p> Approve : <span style="color:<?php if($fetch_orders['STATUS'] == 'pending'){ echo 'red'; }else{ echo 'green'; } ?>;"><?php echo $fetch_orders['STATUS']; ?></span> </p>
      </div>
</div>
<br>
   <?php
    }
   }else{
    echo'
    <div   class="heading1 margin_0">
    <h2 style="text-align:center;">No Events Book Yet</h2>
 </div>  '; }
   ?>
</div>

</section>

<br>
<br>
<br>
<?php

include "footer.php";

?>