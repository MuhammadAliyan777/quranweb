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
include "model/events_1.php";
?>
<div class="row column_title">
   <div class="col-md-12">
      <div class="page_title">
         <h2>Events Booking</h2>
      </div>
   </div>
</div>
<div class="col-lg-12">

   <form class="form-control" method="post">
      <div class="heading1 margin_0">
         <h2>Request For Events</h2>
      </div>
      <select name="events" class="form-control" aria-label="Default select example">
         <option selected>Choose Event</option>
         <option value="Wedding">Wedding</option>
         <option value="Birthday">Birthday</option>
         <option value="Corporate">Corporate</option>
         <option value="Other">Other</option>
      </select>
      <br>
      <select class="form-control" name="decoration" aria-label="Default select example">
         <option selected>Choose Decoration Level</option>
         <option value="Basic">Basic</option>
         <option value="Normal">Normal</option>
         <option value="Advanced">Advanced</option>
      </select>
      <br>
      <select class="form-control" name="venue" aria-label="Default select example">
         <option selected>Choose Venue</option>
         <option value="Basic">Basic</option>
         <option value="Normal">Normal</option>
         <option value="Advanced">Advanced</option>
      </select>
      <br>
      <div class="field">
         <input type="number" min="50" max="1000" class="form-control" name="persons" placeholder="Persons" />
         
      </div>
      <br>
      
      <div class="field">
         <input type="text" class="form-control" name="food" placeholder="Enter Food (You want to add)" />
         
      </div>
<br>
      <select class="form-control" name="food_package" aria-label="Default select example">
      <option selected>Choose Food Package</option>
         <option value="Basic">Basic</option>
         <option value="Normal">Normal</option>
         <option value="Advanced">Advanced</option>
      </select>
      <br>
      <button name="btn" class="main_bt form-control">Submit</button>


   </form>
</div>

<?php

include "footer.php";

?>