<?php
session_start();
include './database/database.php';

if (isset($_POST['Submit'])) {
  $UserName = $_POST['UserName'];
  $Passward = $_POST['Passward'];

  $CheckUserInfo = $db->query("SELECT COUNT(*) AS TotalRecords FROM users Where UserName = '$UserName' AND Passward = '$Passward'");
  $rowCheckUserInfo = $CheckUserInfo->fetch(PDO::FETCH_ASSOC);
  if ($rowCheckUserInfo['TotalRecords'] > 0) {
    $GetUserInfo = $db->query("SELECT * FROM users WHERE UserName = '$UserName' AND Passward = '$Passward'");
    $rowGetUserInfo = $GetUserInfo->fetch(PDO::FETCH_ASSOC);

    $_SESSION['ZamaID'] = $rowGetUserInfo['ID'];
    header('location: index.php');
  } else {
    echo "Invalid UserName or Password!";
  }
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
    body2 {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f5f5f5;
    }

    .container {
      width: 500px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .login-form,
    .chat-container {
      background-color: #fff;
      border-radius: 30px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
      padding: 20px;
      margin-bottom: 20px;
      margin-top: 20px;
    }

    .login-form h2,
    .chat-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .login-form label {
      display: block;
      margin-bottom: 5px;
    }

    .login-form input[type="email"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 30px;
      margin-bottom: 15px;
    }

    .login-button,
    .send-button {
      padding: 10px 15px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .login-button:hover,
    .send-button:hover {
      background-color: #3e8e41;
    }

    .chat-message {
      padding: 15px;
      border-radius: 5px;
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
          <h1 class="display-1 text-white font-weight-bold font-primary">iCentric Login</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- /page-title -->


  <!-- login form -->
  <div class="container">
    <div class="login-form">
      <h2>Login</h2>
      <form method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="UserName" placeholder="Your email address" required>
        <label for="password">Password:</label>
        <input type="password" id="passward" name="Passward" placeholder="Your password" required>
        <input style="text-align: center;" class="btn btn-primary" type="submit" name="Submit"></input>
        <p>New User? <a href="./signup.php">Sign Up</a></p>
      </form>
    </div>

  </div>
  <!-- /login form -->


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