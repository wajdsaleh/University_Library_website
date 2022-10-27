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
  <!-- PHP style -->
  <link href="../css/phpfiles.css" rel="stylesheet" />

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
                <a href="search.php">
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


  <section class="slider_section">
    <div class="row">
      <form class="search_page" method="GET" action="">
         <input name="search" type="text" class="form-control" 
         placeholder="Search by ISSN / Title / Author or Publisher name">
          <button name = "submit" class="" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
      </form>

<?php
    $conn = oci_connect("wajd", "wajd1200", "LAPTOP-FBNS74CI/XE");

    if (!$conn)
    echo "not connected";

    else if(isset($_GET['submit'])){
    $que = $_GET['search'];
    if(empty($que)){
    echo "<div class = 'result'>Books</div>";
      $ALL = "SELECT * FROM BOOK";
      $SQL = oci_parse($conn,$ALL);
      oci_execute($SQL);
      while($row = oci_fetch_array($SQL)){
        $issn = $row[0];
        $title = $row[1];
        $author = $row[2];
        $publisher = $row[3];
        $pub_date = $row[4];
        $edition = $row[5];
        $zone_num = $row[6];
        $zone_name = $row [7];
        $Shelve = $row[8];
        echo "
        <a href='borrow.php'>
        <div class='card mb-3' style='max-width: 450px;'>
    <div class='row g-0'>
      <div class='col-md-4'>
        <img src='../images/$issn.jpg' 
        style='margin-bottom:320px;margin-left:10px;width:150px;height:200px;
        margin-top:5px;'>
      </div>
      <div class='col-md-8'>
        <div class='card-body'>
          <h5 class='card-title' style='position:relative;top:60px;
          color:white;font-size:30px;'>".$title."</h5>
          <p class='card-text' style='position:relative;padding-top:160px;
          font-size:17px;right:160px'>
          ISSN: ".$issn."<br>
          Author: ".$author."<br>
          Published by: ".$publisher."<br>
          Published in: ".$pub_date."<br>
          Edition No.: ".$edition."<br>
          Place -Where you can find it in our library-:<br>Zone No.
        ".$zone_num." Zone name: ".$zone_name."
        <br>Shelve: ".$Shelve."
          </p>
        </div>
      </div>
    </div>
  </div></a>";}
  echo "<div class = 'result'>Thesis</div>";
  $ALL = "SELECT * FROM THESIS";
  $SQL = oci_parse($conn,$ALL);
  oci_execute($SQL);
  while($row = oci_fetch_array($SQL)){
    $issn = $row[0];
    $title = $row[1];
    $author = $row[2];
    $publisher = $row[3];
    $pub_date = $row[4];
    $edition = $row[5];
    $zone_num = $row[6];
    $zone_name = $row [7];
    $Shelve = $row[8];
    echo "
    <a href='borrow.php'>
    <div class='card mb-3' style='max-width: 450px;'>
<div class='row g-0'>
  <div class='col-md-4'>
    <img src='../images/$issn.jpg' 
    style='margin-bottom:320px;margin-left:10px;width:150px;height:200px;
    margin-top:5px;'>
  </div>
  <div class='col-md-8'>
    <div class='card-body'>
      <h5 class='card-title' style='position:relative;top:60px;
      color:white;font-size:30px;'>".$title."</h5>
      <p class='card-text' style='position:relative;padding-top:160px;
      font-size:17px;right:160px'>
      ISSN: ".$issn."<br>
      Author: ".$author."<br>
      Published by: ".$publisher."<br>
      Published in: ".$pub_date."<br>
      Edition No.: ".$edition."<br>
      Place -Where you can find it in our library-:<br>Zone No.
    ".$zone_num." Zone name: ".$zone_name."
    <br>Shelve: ".$Shelve."
      </p>
    </div>
  </div>
</div>
</div></a>";}
echo "<div class = 'result'>Journals</div>";
$ALL = "SELECT * FROM JOURNAL";
      $SQL = oci_parse($conn,$ALL);
      oci_execute($SQL);
      while($row = oci_fetch_array($SQL)){
        $issn = $row[0];
        $title = $row[1];
        $author = $row[2];
        $publisher = $row[3];
        $pub_date = $row[4];
        $edition = $row[5];
        $zone_num = $row[6];
        $zone_name = $row [7];
        $Shelve = $row[8];
        echo "
        <a href='borrow.php'>
        <div class='card mb-3' style='max-width: 450px;'>
    <div class='row g-0'>
      <div class='col-md-4'>
        <img src='../images/$issn.jpg' 
        style='margin-bottom:320px;margin-left:10px;width:150px;height:200px;
        margin-top:5px;'>
      </div>
      <div class='col-md-8'>
        <div class='card-body'>
          <h5 class='card-title' style='position:relative;top:60px;
          color:white;font-size:30px;'>".$title."</h5>
          <p class='card-text' style='position:relative;padding-top:160px;
          font-size:17px;right:160px'>
          ISSN: ".$issn."<br>
          Author: ".$author."<br>
          Published by: ".$publisher."<br>
          Published in: ".$pub_date."<br>
          Edition No.: ".$edition."<br>
          Place -Where you can find it in our library-:<br>Zone No.
        ".$zone_num." Zone name: ".$zone_name."
        <br>Shelve: ".$Shelve."
          </p>
        </div>
      </div>
    </div>
  </div></a>";}}
    else{
    $query = "SELECT issn, title, author_name, publisher_name, publishing_date, edition, zone_number, zone_name, shelve 
    FROM book, publisherauthor, publishers, authors, place
    WHERE ((book.PA_ID = publisherauthor.pa_id) AND (publisherauthor.publisher_id = publishers.publisher_id)
            AND (publisherauthor.author_id = authors.author_id) AND (book.place_id = place.place_id)) 
            AND
        ((UPPER (title) like UPPER('%$que%')) OR (issn like '%$que%') 
           OR (edition like '%$que%') OR (UPPER(author_name) like UPPER('%$que%'))
           OR (UPPER (publisher_name) like UPPER('%$que%')))";

    $SQL1 = oci_parse($conn, $query);
    oci_execute($SQL1);

    while($row = oci_fetch_array($SQL1)){
      $issn = $row[0];
      $title = $row[1];
      $author = $row[2];
      $publisher = $row[3];
      $pub_date = $row[4];
      $edition = $row[5];
      $zone_num = $row[6];
      $zone_name = $row [7];
      $Shelve = $row[8];
      
      echo "
      <a href='borrow.php'>
      <div class='card mb-3' style='max-width: 450px;'>
  <div class='row g-0'>
    <div class='col-md-4'>
      <img src='../images/$issn.jpg' 
      style='margin-bottom:320px;margin-left:10px;width:150px;height:200px;
      margin-top:5px;'>
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <h5 class='card-title' style='position:relative;top:60px;
        color:white;font-size:30px;'>".$title."</h5>
        <p class='card-text' style='position:relative;padding-top:160px;
        font-size:17px;right:160px'>
        ISSN: ".$issn."<br>
        Author: ".$author."<br>
        Published by: ".$publisher."<br>
        Published in: ".$pub_date."<br>
        Edition No.: ".$edition."<br>
        Place -Where you can find it in our library-:<br>Zone No.
      ".$zone_num." Zone name: ".$zone_name."
      <br>Shelve: ".$Shelve."
        </p>
      </div>
    </div>
  </div>
</div></a>";}
     
        $query = "SELECT issn, title, author_name, publisher_name, publishing_date, edition, zone_number, zone_name, shelve 
        FROM thesis, publisherauthor, publishers, authors, place
        WHERE ((thesis.PA_ID = publisherauthor.pa_id) AND (publisherauthor.publisher_id = publishers.publisher_id)
                AND (publisherauthor.author_id = authors.author_id) AND (thesis.place_id = place.place_id)) 
                AND
            ((UPPER (title) like UPPER('%$que%')) OR (issn like '%$que%') 
               OR (edition like '%$que%') OR (UPPER(author_name) like UPPER('%$que%'))
               OR (UPPER (publisher_name) like UPPER('%$que%')))";
    
        $SQL2 = oci_parse($conn, $query);
        oci_execute($SQL2);

        while($row = oci_fetch_array($SQL2)){
          $issn = $row[0];
          $title = $row[1];
          $author = $row[2];
          $publisher = $row[3];
          $pub_date = $row[4];
          $edition = $row[5];
          $zone_num = $row[6];
          $zone_name = $row [7];
          $Shelve = $row[8];
          echo "
          <a href='borrow.php'>
          <div class='card mb-3' style='max-width: 450px;'>
      <div class='row g-0'>
        <div class='col-md-4'>
          <img src='../images/$issn.jpg' 
          style='margin-bottom:320px;margin-left:10px;width:150px;height:200px;
          margin-top:5px;'>
        </div>
        <div class='col-md-8'>
          <div class='card-body'>
            <h5 class='card-title' style='position:relative;top:60px;
            color:white;font-size:30px;'>".$title."</h5>
            <p class='card-text' style='position:relative;padding-top:160px;
            font-size:17px;right:160px'>
            ISSN: ".$issn."<br>
            Author: ".$author."<br>
            Published by: ".$publisher."<br>
            Published in: ".$pub_date."<br>
            Edition No.: ".$edition."<br>
            Place -Where you can find it in our library-:<br>Zone No.
          ".$zone_num." Zone name: ".$zone_name."
          <br>Shelve: ".$Shelve."
            </p>
          </div>
        </div>
      </div>
    </div></a>";}
      $query = "SELECT issn, title, author_name, publisher_name, publishing_date, edition, zone_number, zone_name, shelve 
      FROM journal, publisherauthor, publishers, authors, place
      WHERE ((journal.PA_ID = publisherauthor.pa_id) AND (publisherauthor.publisher_id = publishers.publisher_id)
              AND (publisherauthor.author_id = authors.author_id) AND (journal.place_id = place.place_id)) 
              AND
          ((UPPER (title) like UPPER('%$que%')) OR (issn like '%$que%') 
             OR (edition like '%$que%') OR (UPPER(author_name) like UPPER('%$que%'))
             OR (UPPER (publisher_name) like UPPER('%$que%')))";

      $SQL3 = oci_parse($conn, $query);
      oci_execute($SQL3);

      while($row = oci_fetch_array($SQL3)){
        $issn = $row[0];
        $title = $row[1];
        $author = $row[2];
        $publisher = $row[3];
        $pub_date = $row[4];
        $edition = $row[5];
        $zone_num = $row[6];
        $zone_name = $row [7];
        $Shelve = $row[8];
        
        echo "
        <a href='borrow.php'>
        <div class='card mb-3' style='max-width: 450px;'>
    <div class='row g-0'>
      <div class='col-md-4'>
        <img src='../images/$issn.jpg' 
        style='margin-bottom:320px;margin-left:10px;width:150px;height:200px;
        margin-top:5px;'>
      </div>
      <div class='col-md-8'>
        <div class='card-body'>
          <h5 class='card-title' style='position:relative;top:60px;
          color:white;font-size:30px;'>".$title."</h5>
          <p class='card-text' style='position:relative;padding-top:160px;
          font-size:17px;right:160px'>
          ISSN: ".$issn."<br>
          Author: ".$author."<br>
          Published by: ".$publisher."<br>
          Published in: ".$pub_date."<br>
          Edition No.: ".$edition."<br>
          Place -Where you can find it in our library-:<br>Zone No.
        ".$zone_num." Zone name: ".$zone_name."
        <br>Shelve: ".$Shelve."
          </p>
        </div>
      </div>
    </div>
  </div></a>";}
  if( (oci_num_rows($SQL1) == 0) && (oci_num_rows($SQL2) == 0) && (oci_num_rows($SQL3) == 0) ){
    echo "<div id = 'sorry'>Sorry..<br>We couldn't find what you looking for..</div>";}}

    oci_close($conn);}?>



    </div></section>


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