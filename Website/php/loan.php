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

  <!-- borrow section -->

  <section class="contact_section layout_padding">
    <?php 
    $conn = oci_connect("wajd", "wajd1200", "LAPTOP-FBNS74CI/XE"); 

    if (!$conn)
        echo "not connected";
    
        else if(isset($_POST['submit'])){
          $type = $_POST['type'];
          $title = $_POST['title'];
          $author = $_POST['author'];
          $E_mail = $_POST['email'];
          $edition = $_POST['edition'];
            
          $check = "SELECT UNI_E_MAIL FROM REGISTER WHERE UNI_E_MAIL = '$E_mail'";
          $SQL = oci_parse($conn, $check);
          oci_execute($SQL);
          $row = oci_fetch_array($SQL);

          if (oci_num_rows($SQL) != 0){
            $insert="INSERT INTO requestnewdoc(oreder_number,uni_e_mail,title,type,author_name,
            edition)
             VALUES (num_req_seq.NEXTVAL,'$E_mail','$title','$type','$author','$edition')";

            $I = oci_parse($conn, $insert);
            oci_execute($I);
            
            $SQL = "SELECT OREDER_NUMBER FROM REQUESTNEWDOC WHERE UNI_E_MAIL = '$E_mail'
            AND title = '$title'";
            $S = oci_parse($conn, $SQL);
            oci_execute($S);
            $row = oci_fetch_array($S);
            $orderNum = $row[0];
            echo "
            <p style = 'font-family: Times New Roman, Times, serif;
            font-size: 200%;margin:50px;padding:40px;color:#00007f'>
            <em>Thank you<br>Your order number is: " . $orderNum . "</em></p><br>"; }
            else {
              echo "
              <p style = 'font-family: Times New Roman, Times, serif;
            font-size: 200%;margin:50px;padding:40px;color:red'>
              <em>Sorry, this E-mail doesn't have an account..</em></p><br>";}}
         
    
    
    
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
            Requesting Form
            </h2>
          </div>
          <form method="post">
            <div>
              <input type="email" placeholder="Email" name= "email" required/>
            </div>
            <div>
              <input type="text" placeholder="Title" name="title" required />
            </div>
            <div>
              <input type="text" placeholder="Author" name="author" required />
            </div>
            <select class="" required name="type">
              <option value="" disabled selected hidden>Item Type</option>
              <option value="book">Book</option>
              <option value="thesis">Thesis</option>
              <option value="journal">Journal</option>
            </select>
            <div>
              <input type="text" placeholder="Edition" name="edition" />
            </div>
            <div class="btn-box">

              <button name="submit" type="submit">
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="../images/contact-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

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