<?php
session_start();
if(isset($_SESSION["user_id"])){
 $conn = require __DIR__ . '/database.php';
 $_id = $_SESSION['user_id'];
 $SQL = "select * from register where id = $_id ";
 
 $_Result = oci_parse($conn , $SQL);

 oci_execute($_Result);
 $row = oci_fetch_array($_Result);

 $fname = $row[3];
 $lname = $row[4];
 $uni_e_mail = $row[2];
 $SQL2 = "SELECT * FROM members WHERE uni_e_mail = '$uni_e_mail'";
 
 $_Result2 = oci_parse($conn , $SQL2);

 oci_execute($_Result2);
 $row2 = oci_fetch_array($_Result2);
 $membership = $row2[1];
 $checkeditems = $row2[3];}


?>



<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="../images/cat1.png" type="image/gif" />

  <title>University Library</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- website styles  -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />



</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="home.php">
            <span>
              University Library
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link pl-lg-0" href="home.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link pl-lg-0" href="categories.php">Categories </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="loan.php">Request</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="room.php">Room Reservation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="borrow.php">Borrow</a>
                </li>
              </ul>
              <from class="search_form">
                <a href="../php/search.php">
                  <button class="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </a>
                <a href="profile.php">
                  <button class="">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  </button>
                </a>
              </from>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

<div class="container d-flex justify-content-center align-items-center">
             
             <div class="card">

              <div class="upper">

              </div>

              <div class="user text-center">

                <div class="profile">

                    <img src="../images/prof.png" width="80">
                  
                </div>

              </div>


              <div class="mt-5 text-center">

                <h4 class="mb-0" style="position: relative; margin-top: 10px;" >
                <br>
                <?php 
                echo $fname .' '.$lname;
                ?>
              
              </h4>
                <span class="text-muted d-block mb-2" style="position: relative;">
                <?php 
                echo $membership;
                ?>
              
              </span>

            

                <div class="d-flex justify-content-between align-items-center mt-4 px-4">

                  <div class="stats">
                    <h6>Borrowed items</h6>
                    <span>
                    <?php 
                if (!$checkeditems)
                echo 0;
                ?>  

                    </span>

                  </div>

                  <div class="stats">
                    <h6>Fines</h6>
                    <span>0</span>
                  </div>

                  <div class="stats">
                    <h6>Requested items</h6>
                    <span>0</span>
                  </div>
                  
                </div>
                <br><br>
                <a href="logout.php">Log Out.</a> 
              </div>
               
             </div>

           </div>
    </div>



 <!-- info section -->

 <section class="info_section layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 info-col">
        <div class="info_detail">
          <h4>
            About Us
          </h4>
          <p>
           This is a website design to showcase Qassim University library items, out students and employee can access a wide range of educational work.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 info-col">
        <div class="info_contact">
          <h4>
            Qassim - Mulida 
          </h4>
          <div class="contact_link_box">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Qassim University
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
               3011111 (16) (966) +
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                info@qu.edu.sa
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 info-col">
        <div class="info_contact">
          <h4>
            Newsletter
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 info-col">
        <div class="map_container">
          <div class="map">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end info section -->

<!-- jQery -->
<script src="../js/jquery-3.4.1.min.js"></script>
<!-- bootstrap js -->
<script src="../js/bootstrap.js"></script>
<!-- custom js -->
<script src="../js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->


</body>