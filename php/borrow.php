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
      if($type == '1'){
      $title = $_POST['title'];
      $author = $_POST['author'];
      $E_mail = $_POST['Email'];
      $name = $_POST['name'];
      $copies = $_POST['copies'];

      $check = "SELECT UNI_E_MAIL FROM REGISTER WHERE UPPER(UNI_E_MAIL) = UPPER('$E_mail')";
      $SQL = oci_parse($conn, $check);
      oci_execute($SQL);
      while($row = oci_fetch_array($SQL));
      if (oci_num_rows($SQL) != 0){
      $query="SELECT IS_IT_BORROWED FROM BOOK,PUBLISHERAUTHOR,AUTHORS 
      WHERE (BOOK.PA_ID = PUBLISHERAUTHOR.PA_ID AND PUBLISHERAUTHOR.AUTHOR_ID = AUTHORS.AUTHOR_ID)
      AND
      (IS_IT_BORROWED = 'T' AND UPPER(TITLE) like UPPER('%$title%')
      AND UPPER(AUTHOR_NAME) like UPPER('%$author%'))";
      $SQL1 = oci_parse($conn, $query);
      oci_execute($SQL1);

      while($row = oci_fetch_array($SQL1));

      if (oci_num_rows($SQL1) == 0){
        $S = "SELECT ISSN FROM BOOK,PUBLISHERAUTHOR,AUTHORS
        WHERE ((BOOK.PA_ID = PUBLISHERAUTHOR.PA_ID) AND (PUBLISHERAUTHOR.AUTHOR_ID = AUTHORS.AUTHOR_ID))
        AND
        ((UPPER(TITLE) LIKE UPPER('%$title%')) AND (UPPER(AUTHOR_NAME) like UPPER('%$author%')))";
        $p = oci_parse($conn, $S);
        oci_execute($p);
        $row2 = oci_fetch_array($p);
        if(oci_num_rows($p) != 0){
        $i = "INSERT INTO BORROWERS 
        (BORROWER_ID,UNI_E_MAIL,DOC_ISSN)
        VALUES (BrId_seq.NEXTVAL,:email,:ISSN)";
        
        $INSERT1 = oci_parse($conn, $i);
        oci_bind_by_name($INSERT1, ":email", $E_mail);
        oci_bind_by_name($INSERT1, ":ISSN", $row2[0]);
        oci_execute($INSERT1);

        $find = "SELECT ZONE_NAME,ZONE_NUMBER,SHELVE FROM BOOK,PLACE
        WHERE (BOOK.PLACE_ID = PLACE.PLACE_ID) AND (ISSN = $row2[0])";
        $F = oci_parse($conn, $find);
        oci_execute($F);
        $row3 = oci_fetch_array($F);
        echo "<p style = 'font-family: Times New Roman, Times, serif;
        font-size: 200%;margin:50px;padding:40px;'>Your request is submitted .. <br>
        You can find your book in ".$row3[0].":".$row3[1]." Shelve: ".$row3[2]."</p>";}
        else {
          echo "<p style = 'font-family: Times New Roman, Times, serif;
          font-size: 200%;margin:50px;padding:40px;'><em>Sorry, We don't have this book..
          <br>but don't worry, you can request it..
          <a href='loan.php'>Here!</a></em></p>";}
        }
      else{
        echo "<p style = 'font-family: Times New Roman, Times, serif;
        font-size: 200%;margin:50px;padding:40px;'><em>Sorry, this book is already borrowed..</em></p>";}}
      else 
      echo "<p style = 'font-family: Times New Roman, Times, serif;
      font-size: 200%;margin:50px;padding:40px;'><em>Sorry, this E-mail doesn't have an account..</em></p>";}
        

      if($type == '2'){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $E_mail = $_POST['Email'];
        $name = $_POST['name'];
        $copies = $_POST['copies'];
        $check = "SELECT UNI_E_MAIL FROM REGISTER WHERE UPPER(UNI_E_MAIL) = UPPER('$E_mail')";
      $SQL = oci_parse($conn, $check);
      oci_execute($SQL);
      while($row = oci_fetch_array($SQL));
      if (oci_num_rows($SQL) != 0){
        $query="SELECT IS_IT_BORROWED FROM THESIS,PUBLISHERAUTHOR,AUTHORS 
        WHERE (THESIS.PA_ID = PUBLISHERAUTHOR.PA_ID AND PUBLISHERAUTHOR.AUTHOR_ID = AUTHORS.AUTHOR_ID)
        AND
        (IS_IT_BORROWED = 'T' AND UPPER(TITLE) like UPPER('%$title%')
        AND UPPER(AUTHOR_NAME) like UPPER('%$author%'))";
        $SQL1 = oci_parse($conn, $query);
        oci_execute($SQL1);
  
        while($row = oci_fetch_array($SQL1));
  
        if (oci_num_rows($SQL1) == 0){
          $S = "SELECT ISSN FROM THESIS,PUBLISHERAUTHOR,AUTHORS
          WHERE ((THESIS.PA_ID = PUBLISHERAUTHOR.PA_ID) AND (PUBLISHERAUTHOR.AUTHOR_ID = AUTHORS.AUTHOR_ID))
          AND
          ((UPPER(TITLE) LIKE UPPER('%$title%')) AND (UPPER(AUTHOR_NAME) like UPPER('%$author%')))";
          $p = oci_parse($conn, $S);
          oci_execute($p);
          $row2 = oci_fetch_array($p);
          if(oci_num_rows($p) != 0){
          $i = "INSERT INTO BORROWERS 
          (BORROWER_ID,UNI_E_MAIL,DOC_ISSN)
          VALUES (BrId_seq.NEXTVAL,:email,:ISSN)";
          
          $INSERT1 = oci_parse($conn, $i);
          oci_bind_by_name($INSERT1, ":email", $E_mail);
          oci_bind_by_name($INSERT1, ":ISSN", $row2[0]);
          oci_execute($INSERT1);
          
  
          $find = "SELECT ZONE_NAME,ZONE_NUMBER,SHELVE FROM THESIS,PLACE
          WHERE (THESIS.PLACE_ID = PLACE.PLACE_ID) AND (ISSN = '$row2[0]')";
          $F = oci_parse($conn, $find);
          oci_execute($F);
          $row3 = oci_fetch_array($F);
          echo "<p style = 'font-family: Times New Roman, Times, serif;
          font-size: 200%;margin:50px;padding:40px;'>Your request is submitted .. <br>
          You can find your thesis in ".$row3[0].":".$row3[1]." Shelve: ".$row3[2]."</p>";}
          else {
            echo "<p style = 'font-family: Times New Roman, Times, serif;
            font-size: 200%;margin:50px;padding:40px;'>Sorry, We don't have this thesis..
            <br>but don't worry, you can request it..
            <a href='loan.php'>Here!</a></p>";}}
        else{
          echo "<p style = 'font-family: Times New Roman, Times, serif;
          font-size: 200%;margin:50px;padding:40px;'>Sorry, this thesis is already borrowed..</p>";}}
          else 
          echo "<p style = 'font-family: Times New Roman, Times, serif;
          font-size: 200%;margin:50px;padding:40px;'>Sorry, this E-mail doesn't have an account..</p>";}
  
  
          if($type == '3'){
            $title = $_POST['title'];
            $author = $_POST['author'];
            $E_mail = $_POST['Email'];
            $name = $_POST['name'];
            $copies = $_POST['copies'];
            $check = "SELECT UNI_E_MAIL FROM REGISTER WHERE UPPER(UNI_E_MAIL) = UPPER('$E_mail')";
            $SQL = oci_parse($conn, $check);
      oci_execute($SQL);
      while($row = oci_fetch_array($SQL));
      if (oci_num_rows($SQL) != 0){
            $query="SELECT IS_IT_BORROWED FROM JOURNAL,PUBLISHERAUTHOR,AUTHORS 
            WHERE (JOURNAL.PA_ID = PUBLISHERAUTHOR.PA_ID AND PUBLISHERAUTHOR.AUTHOR_ID = AUTHORS.AUTHOR_ID)
            AND
            (IS_IT_BORROWED = 'T' AND UPPER(TITLE) like UPPER('%$title%')
            AND UPPER(AUTHOR_NAME) like UPPER('%$author%'))";
            $SQL1 = oci_parse($conn, $query);
            oci_execute($SQL1);
      
            while($row = oci_fetch_array($SQL1));
      
            if (oci_num_rows($SQL1) == 0){
              $S = "SELECT ISSN FROM JOURNAL,PUBLISHERAUTHOR,AUTHORS
              WHERE ((JOURNAL.PA_ID = PUBLISHERAUTHOR.PA_ID) AND (PUBLISHERAUTHOR.AUTHOR_ID = AUTHORS.AUTHOR_ID))
              AND
              ((UPPER(TITLE) LIKE UPPER('%$title%')) AND (UPPER(AUTHOR_NAME) like UPPER('%$author%')))";
              $p = oci_parse($conn, $S);
              oci_execute($p);
              $row2 = oci_fetch_array($p);
              if(oci_num_rows($p) != 0){
              $i = "INSERT INTO BORROWERS 
              (BORROWER_ID,UNI_E_MAIL,DOC_ISSN)
              VALUES (BrId_seq.NEXTVAL,:email,:ISSN)";
              
              $INSERT1 = oci_parse($conn, $i);
              oci_bind_by_name($INSERT1, ":email", $E_mail);
              oci_bind_by_name($INSERT1, ":ISSN", $row2[0]);
              oci_execute($INSERT1);
      
              $find = "SELECT ZONE_NAME,ZONE_NUMBER,SHELVE FROM JOURNAL,PLACE
              WHERE (JOURNAL.PLACE_ID = PLACE.PLACE_ID) AND (ISSN = '$row2[0]')";
              $F = oci_parse($conn, $find);
              oci_execute($F);
              $row3 = oci_fetch_array($F);
              echo "<p style = 'font-family: Times New Roman, Times, serif;
              font-size: 200%;margin:50px;padding:40px;'>Your request is submitted .. <br>
              You can find your journal in ".$row3[0].":".$row3[1]." Shelve: ".$row3[2]."</p>";}
              else {
                echo "<p style = 'font-family: Times New Roman, Times, serif;
                font-size: 200%;margin:50px;padding:40px;'>Sorry, We don't have this journal..
                <br>but don't worry, you can request it..
                <a href='loan.php'>Here!</a></p>";}}
            else{
              echo "<p style = 'font-family: Times New Roman, Times, serif;
              font-size: 200%;margin:50px;padding:40px;'>Sorry, this journal is already borrowed..</p>";}}
              else 
              echo "<p style = 'font-family: Times New Roman, Times, serif;
              font-size: 200%;margin:50px;padding:40px;'>Sorry, this E-mail doesn't have an account..</p>";}

      oci_close($conn);}?>

    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Borrowing Form
            </h2>
          </div>
          <form method= "post" action="">
            <div>
              <input type="text" placeholder="Name" name="name" required />
            </div>
            <div>
              <input type="email" placeholder="Email" name="Email" required/>
            </div>
            <div>
              <input type="text" placeholder="Item Title" name="title" required/>
            </div>
            <div>
              <input type="text" placeholder="Author" name="author" required/>
            </div>
            <div>
              <select class="" required name="type">
                <option value="" disabled selected hidden>Item Type</option>
                <option value="1">Book</option>
                <option value="2">Thesis</option>
                <option value="3">Journal</option>
              </select>
            </div>
            <div>
              <input name="copies" type="number" placeholder="Number of copies" min="1" max="2" required />
            </div>
            <div class="btn-box">
              <button type="submit" name="submit">
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="../images/about-img.png" alt="">
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