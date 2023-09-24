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

                  <h3>Create Food Menu</h3>
                  <br>
        <?php include "./model/menu.php" ?>
                     <form method="post" enctype="multipart/form-data">
                        <fieldset>
                           <div class="field">
                              <input required class="form-control" type="text" name="name" placeholder="Food Name" />
                           </div>

                           <br>
                           <div class="field">
                              <input required class="form-control" type="text" name="desc" placeholder="Description" />
                           </div>
                           <br>
                           <div class="field">
                              <input required  class="form-control" type="number" name="price" placeholder="Choose Price" />
                           </div>
                      <br>
                      <div class="field">
                              <input required name = "image" class="form-control" type="file" accept="image/jpg, image/jpeg, image/png, image/jfif"  name="password" placeholder="Choose Image" />
                           </div>
                           <br>
                           <div class="field margin_0">
                               
                              <button class="main_bt" name="btn">Add Menu</button>
                             
</div>
 
                               
                               
                            
                        </fieldset>
                     </form>
                     <br>
<a href="view_menu.php"><button class="main_bt">View Menu</button></a>   

                  
<br><br>

                     <h3>Create Decorations</h3>
                  <br>
        <?php include "./model/decoration.php" ?>
                     <form method="post" enctype="multipart/form-data">
                        <fieldset>
                           <div class="field">
                              <input required class="form-control" type="text" name="name" placeholder="Decoration Name" />
                           </div>

                           <br>
                           <div class="field">
                              <input required class="form-control" type="text" name="desc" placeholder="Description" />
                           </div>
                           <br>
                      
                      <div class="field">
                              <input required name = "image" class="form-control" type="file" accept="image/jpg, image/jpeg, image/png, image/jfif"  name="password" placeholder="Choose Image" />
                           </div>
                           <br>
                           <div class="field margin_0">
                               
                              <button class="main_bt" name="btn2">Add Decoration</button>
                            
                              
</div>

                               
                               
                            
                        </fieldset>
                     </form>
               <br>
               <a href="view_decoration.php"><button class="main_bt">View Decorations</button></a>
                  

               <br><br>

                     <h3>Create Venue</h3>
                  <br>
        <?php include "./model/venue.php" ?>
                     <form method="post" enctype="multipart/form-data">
                        <fieldset>
                           <div class="field">
                              <input required class="form-control" type="text" name="name" placeholder="Venue Name" />
                           </div>

                           <br>
                           <div class="field">
                              <input required class="form-control" type="text" name="desc" placeholder="Description" />
                           </div>
                           <br>
                      
                      <div class="field">
                              <input required name = "image" class="form-control" type="file" accept="image/jpg, image/jpeg, image/png, image/jfif"  name="password" placeholder="Choose Image" />
                           </div>
                           <br>
                           <div class="field margin_0">
                               
                              <button class="main_bt" name="btn3">Add Venue</button>
                            
                              
</div>

                               
                               
                            
                        </fieldset>
                     </form>
               <br>
               <a href="view_venue.php"><button class="main_bt">View Venue</button></a>
                  

                      

               <br><br>

                     <h3>Create Event</h3>
                  <br>
        <?php include "./model/event.php" ?>
                     <form method="post" enctype="multipart/form-data">
                        <fieldset>
                           <div class="field">
                              <input required class="form-control" type="text" name="name" placeholder="Event Name" />
                           </div>

                           <br>
                           <div class="field">
                              <input required class="form-control" type="text" name="desc" placeholder="Description" />
                           </div>
                           <br>
                      
                      <div class="field">
                              <input required name = "image" class="form-control" type="file" accept="image/jpg, image/jpeg, image/png, image/jfif"  name="password" placeholder="Choose Image" />
                           </div>
                           <br>
                           <div class="field margin_0">
                               
                              <button class="main_bt" name="btn4">Add Event</button>
                            
                              
</div>

                               
                               
                            
                        </fieldset>
                     </form>
               <br>
               <a href="view_event.php"><button class="main_bt">View Event</button></a>
                  

               <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                     </div>
                  </div>