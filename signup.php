<?php

include "./database/database.php";


if (isset($_POST['Submit'])) {
  $FirstName  = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $UserName = $_POST['UserName'];
  $Passward = $_POST['Passward'];

  $Insert = $db->query("INSERT INTO users(FirstName, LastName ,UserName, Passward ) VALUES ( '$FirstName', '$LastName' ,'$UserName', '$Passward')");

  header('location: index.php');
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>iCentric</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- venobox css -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">
  <!-- card slider -->
  <link rel="stylesheet" href="plugins/card-slider/css/style.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <!-- W3school icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .signup-form {
      background-color: #fff;
      border-radius: 30px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
      padding: 20px;
      margin-bottom: 20px;
      margin-top: 20px;
      margin-left: 250px;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 600px;
      /* Initially hidden */
    }

    .signup-form h2 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .signup-form label {
      display: block;
      margin-bottom: 5px;
    }

    .signup-form input[type="text"],
    .signup-form input[type="email"],
    .signup-form input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 30px;
      margin-bottom: 15px;
    }

    .signup-button {
      padding: 10px 15px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .signup-button:hover {
      background-color: #3e8e41;
    }
  </style>
</head>

<body>


  <?php
  include "./header/navigation.php";
  ?>

  <!-- page-title -->
  <section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="display-1 text-white font-weight-bold font-primary">iCentric Registration</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- /page-title -->



  <!-- signup form -->
  <div > 
  <div class="container">
    <div class="signup-form">
        <h2>Sign Up</h2>
          <form method="POST">
            <input type="text" name="FirstName" placeholder="First Name">
            <input type="text" name="LastName" placeholder="Last Name">
            <input type="text" name="UserName" placeholder="Email">
            <input type="text" name="Passward" placeholder="Password">
            <input class="btn btn-primary" type="submit" name="Submit" value="Sign up">
            <p>Already have an account? <a href="./login.php" id="login-link">Login</a></p>
          </form>
    </div>
  </div>
  </div>
  <!-- /signup form -->



  <!-- footer -->
  <?php
  include "./header/footer.php";
  ?>
  <!-- /footer -->

  <!-- jQuery -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- slick slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- venobox -->
  <script src="plugins/venobox/venobox.min.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js"></script>
  <!-- apear js -->
  <script src="plugins/counto/apear.js"></script>
  <!-- counter -->
  <script src="plugins/counto/counTo.js"></script>
  <!-- card slider -->
  <script src="plugins/card-slider/js/card-slider-min.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <!-- Main Script -->
  <script src="js/script.js"></script>

</body>

</html>