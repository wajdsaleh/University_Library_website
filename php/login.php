<?php
$is_invalid = false;

if (isset($_POST['login'])){
   $conn = require __DIR__ . "/database.php";

   $email = $_POST["emaillogin"];
   $SQL = "SELECT * FROM REGISTER WHERE UNI_E_MAIL = '$email'";
   $_Result = oci_parse($conn , $SQL);
   
   oci_execute($_Result);
   $row = oci_fetch_array($_Result);
   if (oci_num_rows($_Result) > 0){
      if (password_verify($_POST["passwordlogin"],$row[2])){
            session_start();
            $_SESSION["user_id"] = $row[0];

            header("Location: home.php");

         }}
      $is_invalid = true;
   
   }
?>



<?php
   if(isset($_POST['signup'])){
    if(empty($_POST["fname"]))
    die("First name is required");

    else if(empty($_POST["lname"]))
    die("Last name is required");

    if( ! filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
    die("Valid email is required");

    if(strlen($_POST["password"]) < 8)
    die("Password must be at least 8 characters");

    if (! preg_match("/[a-z]/i",$_POST["password"]))
    die("Password must contain at least one letter");

    if (! preg_match("/[0-9]/i",$_POST["password"]))
    die("Password must contain at least one number");
    
    if($_POST["password"] !== $_POST["Cpassword"])
    die("Password must match");

    $_PASSWORD_HASH = password_hash($_POST["password"],PASSWORD_DEFAULT);
    $email = $_POST["email"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    $conn = require __DIR__ . "/database.php";

    $SQL = "INSERT INTO REGISTER values(RegID_seq.NEXTVAL,:Email,:Pass,:fn,:ln)";
    $_Result = oci_parse($conn,$SQL);
    if ( ! oci_parse($conn , $SQL)){
        $e = oci_error($conn);
        die("SQL error: " . $e["message"]);}

    oci_bind_by_name($_Result,"Email",$email);
    oci_bind_by_name($_Result,"Pass",$_PASSWORD_HASH);
    oci_bind_by_name($_Result,"fn",$fname);
    oci_bind_by_name($_Result,"ln",$lname);
        
    if ( @oci_execute($_Result)){
    $_ = true;}
    
    else {
        die("Email already taken");}}
        
        ?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration</title>
      <link rel="stylesheet" href="../css/login.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="../images/cat1.png" type="image/gif" />
   </head>
   <body>

      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <br>
            <?php if ($_):?>
         <em>Signup successful.<br><a href="" >You can now log in.</a></em>
         <?php endif; ?>
            <?php 
         if ($is_invalid):?>
         <em>Invalid login</em>
         <?php endif; ?>
            <div class="form-inner">
               <form method= "post" class="login">
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="emaillogin">
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="passwordlogin">
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input name="login" type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form method="post"class="signup" novalidate>
                  <div class="field">
                     <input type="text" placeholder="First Name" name="fname">
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Last Name" name="lname">
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="email">
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="password">
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Confirm password" name="Cpassword">
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input name ="signup" type="submit" value="Signup">
                  </div>
               </form>
            </div>
         </div>
      </div>
      
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>