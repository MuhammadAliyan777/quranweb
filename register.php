<?php
include "controller/config.php";
include "model/reg_model.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Register</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area white-header">
    <div class="main_menu">
      <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between" method="" action="">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
            <button type="submit" class="btn"></button>
            <span class="ti-close" id="close_search" title="Close Search"></span>
          </form>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="Home.PhP"><img src="img/logo9.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="Home.PhP">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:white;" href="About.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:white;" href="services.php">Services
                </a>
              </li>


              <li class="nav-item submenu dropdown">
                <a href="register.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Register</a>
                <ul class="dropdown-menu">
                  <li class="nav-item active">
                    <a class="nav-link" href="register.php">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a style="color:white;" class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link search" id="search">
                  <i style="color:white;" class="ti-search"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="banner_content text-center">
              <h2>Register Yourself</h2>
              <div class="page_link">
                <a href="Home.PhP">Home</a>
                <a href="register.php">Register</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Contact Area =================-->
  <section class="contact_area section_gap">
    <div class="container">
      <div></div>

      <div class="row-lg-9">
        <form class="row contact_form" action="#" method="post" style="align-items: center; display: flex; justify-content: space-around;">

          <div class="col-md-6">
            <h2 style="text-align: center;">Register In Our Portal</h2>
            <br>

            <div class="form-group">
              <input type="text" class="form-control" id="email" name="name" placeholder="Enter Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Name'" required="true" />
            </div>

            <div class="form-group">
              <input type="number" class="form-control" id="email" name="phone" placeholder="Enter Phone No" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone No'" required="true" />
            </div>

            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required="true" />
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" required="true" />
            </div>

            <div class="form-group">
              <input type="password" class="form-control" id="pass" name="cpass" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required="true" />
            </div>

            <button type="submit" name="btn" value="submit" class="btn primary-btn w-100">
              Register
            </button>
          </div>
        </form>
      </div>
    </div>
    </div>
  </section>
  <!--================Contact Area =================-->

  <?php
  include "footer.php";

  ?>
</body>

</html>