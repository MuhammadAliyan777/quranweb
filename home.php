<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>QuraniTeaching - Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #f3f3f3;
    font-family: 'Poppins',sans-serif;
}
.menu{
    padding: 0;
    display: grid;
    grid-template-columns: repeat( auto-fit, minmax(350px,1fr));
    grid-gap: 20px 40px;
}
.heading{
    color: black;
    margin-bottom: 30px;
    padding: 120px 0 30px 0;
    grid-column: 1/-1;
    text-align: center;
}
.heading>h1{
    font-weight: 400;
    font-size: 30px;
    letter-spacing: 10px;
    margin-bottom: 10px;
}
.heading>h3{
    font-weight: 600;
    font-size: 22px;
    letter-spacing: 5px;
}
.food-items{
    display: grid;
    position: relative;
    grid-template-rows: auto 1fr;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    margin: 0 20px;
}
.food-items img{
    position: relative;
    width: 100%;
    border-radius: 15px 15px 0 0;
}

.details{
    padding: 20px 10px;
    display: grid;
    grid-template-rows: auto 1fr 50px;
    grid-row-gap: 15px;
}
.details-sub{
    display: grid;
    grid-template-columns: auto auto;
}
.details-sub>h5{
    font-weight: 600;
    font-size: 18px;
}
.price{
    text-align: right;
}
.details>p{
    color: #6f6f6f;
    font-size: 15px;
    line-height: 28px;
    font-weight: 400;
    align-self: stretch;
}
.details>button{
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

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>
<?php 
include "nav.php";
?>
      </div>
    </header>

    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase animated animated bounceInRight" style="color:white"  >
                 For more Information Contact us
                </p>
                <h2 class="text-uppercase mt-4 mb-5 animated animated bounceInLeft" style="color:white;">
                     Contact Us For Online Quran Learning or teaching.
                </h2>
                <div>
                  <a href="#" style="color:white" class="primary-btn2 mb-3 mb-sm-0">Contact</a>
                  <a href="About.php" style="color:black; background-color: #fdc632;"  class="primary-btn ml-sm-3 ml-0">See Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->

 
  <!--================ Start Feature Area =================-->
  <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Quranic Teaching</h2>
              <p>After learning Quran Students will get
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              
              <div class="desc">
                <h4 class="mt-3 mb-2">Good Tajweed</h4>
                <p>
                Reciters will be able to Read Quran with good tajweed.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="desc">
                <h4 class="mt-3 mb-2">Less Mistakes</h4>
                <p>
                Reciters will be able to make less mistakes in recitation of Quran.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="desc">
                <h4 class="mt-3 mb-2">Understanding Of Words (Hurf)</h4>
                <p>
                  Reciters will be able to understand Hurf of Quran well.

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
<br><br>
   
    <div class="section_gap registration_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3">Contact us</h1>
                <p style="color:fdc632;">
              Contact us 
                <p style="color:#fdc632;">Contact us for the learning of Quran Pak and for the jobs of teaching of Quran. </p>
                </p>
              <br>
              <h1 class="mb-3">Total Experinced In Teaching</h1>
              <div class="col clockinner1 clockinner">
                <h1 class="days" style="color:#fdc632;">25</h1>
                <span class="smalltext">&nbsp;Years</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours" style="color:#fdc632;">4</h1>
                <span class="smalltext">&nbsp;Months</span>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h3>Contact now</h3>
              <p>Please fill these fields</p>
              <form
                class="form_area"
                id="myForm"
                action="mail.html"
                method="post"
              >
                <div class="row">
                  <div class="col-lg-12 form_group">
                    <input
                      name="name"
                      placeholder="Your Name"
                      required=""
                      type="text"
                    />
                    <input
                      name="name"
                      placeholder="Your Phone Number"
                      required=""
                      type="tel"
                    />
                    <input
                      name="email"
                      placeholder="Your Email Address"
                      pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                      required=""
                      type="email"
                    />
                    <input
                      name="age"
                      placeholder="Enter your age"
                      required=""
                      type="number"
                      min="18"
                      max="60"
                    />
                  </div>
                  <div class="col-lg-12 text-center">
                    <button class="primary-btn">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Registration Area =================-->
       
 
  <!--================ Start Feature Area =================-->
  <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Website Main Key Points</h2>
              <p>
                These are our website main important key points.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              
              <div class="desc">
                <h4 class="mt-3 mb-2">Jobs</h4>
                <p>
                 We have jobs for the teaching of online quran teaching.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="desc">
                <h4 class="mt-3 mb-2">Experienced Teachers</h4>
                <p>
                 Students, Parents can contact us for the Teaching of their child online quran teaching.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="desc">
                <h4 class="mt-3 mb-2">Category</h4>
                <p>
                  We can teach everyone from children, women and men.

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--==============
    <!--================ End Testimon"ial Area =================-->
<?php
include "footer.php";
?>


</body>


</html>
