<?php
session_start();

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





    <!-- about section -->

    <section class="about_section layout_padding">
      <div class="container ">
        <div class="row">
          <div class="col-md-6">
            <div class="img-box">
              <img src="../images/about-img.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Introduction to the Library
                </h2>
              </div>
              <p>
                We provide a range of services to support the learning, teaching, and research of the University
                including access to extensive information resources, a wide range of flexible learning environments, and
                the support you need to achieve your learning goals, enhance your research or develop new skills
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->





    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      New Releases
                    </h5>
                    <h1>
                      Sapiens: A Brief History of Humankind
                    </h1>
                    <p>
                      How did our species succeed in the battle for dominance? Why did our foraging ancestors come
                      together to create cities and kingdoms?
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="../images/b1.jpeg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      New Releases
                    </h5>
                    <h1>
                      Astrophysics for People in a Hurry
                    </h1>
                    <p>
                      What is the nature of space and time? How do we fit within the universe? How does the universe fit
                      within us? There's no better guide through these mind-expanding questions than acclaimed
                      astrophysicist and best-selling author Neil deGrasse Tyson.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="../images/b2.jpeg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      New Releases
                    </h5>
                    <h1>
                      1984
                    </h1>
                    <p>
                      The new novel by George Orwell is the major work towards which all his previous writing has
                      pointed. Critics have hailed it as his "most solid, most brilliant" work. Though the story of
                      Nineteen Eighty-Four takes place thirty-five years hence, it is in every sense timely. The scene
                      is London, where there has been no new housing since 1950 and where the city-wide slums are called
                      Victory Mansions. Science has abandoned Man for the State. As every citizen knows only too well,
                      war is peace.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="../images/b3.jpeg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn_box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
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

</html>