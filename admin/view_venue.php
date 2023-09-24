<?php
  $conn = mysqli_connect("localhost", "root", "", "fyp2");
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_image_query =  "SELECT IMAGE FROM `venue` WHERE ID = '$delete_id'" or die('query failed');
   $res = mysqli_query($conn,$delete_image_query);
   $fetch_delete_image = mysqli_fetch_assoc($res);
   unlink('uploaded_img/'.$fetch_delete_image['IMAGE']);
   $sql = "DELETE FROM `venue` WHERE ID = '$delete_id'" or die('query failed');
   $res = mysqli_query($conn,$sql);
   header('location:view_venue.php');
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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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
      <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #f3f3f3;
      font-family: 'Poppins', sans-serif;
    }

    .menu {
      padding: 0;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      grid-gap: 20px 40px;
    }

    .heading {
      color: black;
      margin-bottom: 30px;
      padding: 120px 0 30px 0;
      grid-column: 1/-1;
      text-align: center;
    }

    .heading>h1 {
      font-weight: 400;
      font-size: 30px;
      letter-spacing: 10px;
      margin-bottom: 10px;
    }

    .heading>h3 {
      font-weight: 600;
      font-size: 22px;
      letter-spacing: 5px;
    }

    .food-items {
      display: grid;
      position: relative;
      grid-template-rows: auto 1fr;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      margin: 0 20px;
    }

    .food-items img {
      position: relative;
      width: 100%;
      border-radius: 15px 15px 0 0;
    }

    .details {
      padding: 20px 10px;
      display: grid;
      grid-template-rows: auto 1fr 50px;
      grid-row-gap: 15px;
    }

    .details-sub {
      display: grid;
      grid-template-columns: auto auto;
    }

    .details-sub>h5 {
      font-weight: 600;
      font-size: 18px;
    }

    .price {
      text-align: right;
    }

    .details>p {
      color: #6f6f6f;
      font-size: 15px;
      line-height: 28px;
      font-weight: 400;
      align-self: stretch;
    }

    .details>button {
      background-color: #cb202d;
      border: none;
      color: #ffffff;
      font-size: 16px;
      font-weight: 600;
      border-radius: 5px;
      width: 180px;
    }
  </style>
   </head>

   <?php include "header.php"; ?>
   <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>All Venues</h2>
                           </div>
                        </div>
                     </div>

                     <div class="menu">
  <div class="heading">
    <h2>Here are Our Key Venues for Events</h2>
  </div>
 
  <?php
  $conn = mysqli_connect("localhost", "root", "", "fyp2");
  $sql = "SELECT * FROM `venue`";
  $res = mysqli_query($conn, $sql);

  if(mysqli_num_rows($res) > 0)
  {
    while ($row = mysqli_fetch_assoc($res)) {
      ?>
      <div class="food-items">
      <img src="uploaded_img/<?php echo $row['IMAGE']; ?>">
      <div class="details">
        <div class="details-sub">
          <h5><?php echo $row['VEN_NAME']; ?></h5>
        </div>
        <p><?php echo $row['DESCRIPTION']; ?></p>
        <br>
     <a class="btn btn-outline-dark" href="update_venue.php?update=<?php echo $row['ID']; ?>">Update</a> 
         <a class="btn btn-outline-dark" href="view_venue.php?delete=<?php echo $row['ID']; ?>"  onclick="return confirm('delete this venue?');">delete</a> 
      </div>
    </div>
  
    <?php
    }
  }
  ?>
  
<div class="heading">
</div>
 </html>
