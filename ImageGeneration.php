<?php
include "./session.php";
include "./database/database.php";
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

  <!-- image generation css file -->
  <link rel="stylesheet" href="../source/chatbot.css">
</head>

<body style="background-image: linear-gradient(to right, #c7e0e5, #ffe6cc );">


  <?php
  include "./header/navigation.php";
  ?>

  <!-- page-title -->
  <section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="display-1 text-white font-weight-bold font-primary">AI Image Generation</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- /page-title -->

  <!-- image api -->
  <?php
  include "./APIs/image.php";
  ?>
  <!-- /image api -->

  <!-- AI pics -->
  <section class="section" style="margin-top: -108px;">
  <h2 style=" color:black; text-align:center; height:70px; margin-top:10px;">Sample Images</h2>
    <div class="container-fluid px-0">


      <div class="row no-gutters shuffle-wrapper">
        <div class="col-lg-4 col-md-6 shuffle-item">
          <div class="project-item">
            <img style="padding: 10px; border-radius:100px" src="photos/frozen_king.png" alt="project-image" class="img-fluid w-100">
            <div style=" border-radius:40px;" class="project-hover bg-secondary px-4 py-3">
              <h5 style="color: white;">A cartoonistic ice king wearing long feather coat and crown.</h5>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 shuffle-item">
          <div class="project-item">
            <img style="padding: 10px; border-radius:150px; margin-top:30px" src="photos/club_girl.png" alt="project-image" class="img-fluid w-100">
            <div style=" border-radius:40px" class="project-hover bg-secondary px-4 py-3">
              <h5 style="color: white;">Alcohol ink young lady dancing and spying someone in a club wi...</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 shuffle-item">
          <div class="project-item">
            <img style="padding: 10px; border-radius:100px" src="photos/men_dog.png" alt="project-image" class="img-fluid w-100">
            <div style=" border-radius:40px" class="project-hover bg-secondary px-4 py-3">
              <h5 style="color: white;">Young male model enjoying sunset with his cute puppy.</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 shuffle-item">
          <div class="project-item">
            <img style="padding: 10px; border-radius:100px" src="photos/ladybug.png" alt="project-image" class="img-fluid w-100">
            <div style=" border-radius:40px" class="project-hover bg-secondary px-4 py-3">
              <h5 style="color: white;">Ladybug queen careing & protecting rose petals fro... </h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 shuffle-item">
          <div class="project-item">
            <img style="padding: 10px; border-radius:100px" src="photos/dragon_fight.png" alt="project-image" class="img-fluid w-100">
            <div style=" border-radius:40px" class="project-hover bg-secondary px-4 py-3">
              <h5 style="color: white;">Dark Dragon, fighting over a dark waves of deep sea with a knight under a full moon, with alot of details...</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 shuffle-item">
          <div class="project-item">
            <img style="padding: 10px; border-radius:100px" src="photos/magic_glass.png" alt="project-image" class="img-fluid w-100">
            <div style=" border-radius:40px" class="project-hover bg-secondary px-4 py-3">
              <h5 style="color: white;">A huge glass ball with alot of details.</h5>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 shuffle-item">
          <div class="project-item">
            <img style="padding: 10px; border-radius:150px; margin-top:30px" src="photos/anime_boy.png" alt="project-image" class="img-fluid w-100">
            <div style=" border-radius:40px" class="project-hover bg-secondary px-4 py-3">
              <h5 style="color: white;">Alcohol ink young man enjoying the spring in japanese park while singing.</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 shuffle-item">
          <div class="project-item">
            <img style="padding: 10px; border-radius:150px; margin-top:30px" src="photos/rocket.png" alt="project-image" class="img-fluid w-100">
            <div style=" border-radius:40px" class="project-hover bg-secondary px-4 py-3">
              <h5 style="color: white;">NASA, launching its rocket for space mission.</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 shuffle-item">
          <div class="project-item">
            <img style="padding: 10px; border-radius:150px; margin-top:30px" src="photos/k_men.png" alt="project-image" class="img-fluid w-100">
            <div style=" border-radius:40px" class="project-hover bg-secondary px-4 py-3">
              <h5 style="color: white;">Chinese guy, enjoying the beautifull weather, walking over a river.</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /AI pics -->
 


  <!-- footer -->
  <?php
    include"./header/footer.php";
    ?>
  <!-- /footer -->

  <!-- image generation script -->

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