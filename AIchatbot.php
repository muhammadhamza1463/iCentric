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

    .chat-container {
      width: 700px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      display: flex;
      flex-direction: column;
    }

    .chat-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .sender-name {
      font-weight: bold;
    }

    .chat-timestamp {
      font-size: 12px;
      color: #aaa;
    }

    .chat-message {
      padding: 15px;
      border-radius: 5px;
      background-color: #eee;
      margin-bottom: 15px;
    }

    .chat-message p {
      margin: 0;
    }

    .chat-input-container {
      display: flex;
      align-items: center;
    }

    .chat-input {
      flex: 1;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    #chat-output {
      max-height: 300px;
      min-height: 100px;
      overflow-y: scroll;
    }

    .send-button {
      padding: 10px 15px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .send-button:hover {
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
          <h1 class="display-1 text-white font-weight-bold font-primary">AI Chatbot</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- /page-title -->

  <!-- team single -->
  <section>
    <div style="margin-top: 100px;" class="container">
      <div class="row mb-100">
        <div class="col-lg-4 col-md-6">
          <div style="border-radius: 20px;" class="bg-secondary p-4 text-center">
            <div class="img-thumb-circle mx-auto mb-3">
              <img src="photos/chat robo.png" alt="team-member" class="img-fluid">
            </div>
            <h2 class="text-white">Wanna Chat with Tinku!</h2>
            <p class="text-gradient-primary h4">AI Chatbot by iCentric</p>

          </div>
        </div>
        <!--put form below for chatting-->
        <div style="margin-top: -60px;" class="col-lg-7 offset-lg-1 col-md-6">
          <div class="pt-5">
            <h2>Start Chatting</h2>
            <div style="margin-top: 45px;" class="chat-container">
              <div class="chat-header">
                <div class="sender-name">AI Chatbot</div>
              </div>
              <h5 style="text-align: center;">How can I help you today?</h5>

              <div class="chat-message">
                <p id="chat-output"></p>
              </div>
              <div class="chat-input-container">
                <input style="border-radius: 30px;" type="text" placeholder="Type your Prompt here..." class="chat-input" id="chat_input">
                <button class=" btn btn-primary" id="send-query-button">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /team -->


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


  <!--API-->
  <script type="importmap">
    {
      "imports":
      {
        "@google/generative-ai": "https://esm.run/@google/generative-ai"
      }
    }
  </script>
  <script type="module">
    import {
      GoogleGenerativeAI
    } from "@google/generative-ai";

    const API_KEY = "AIzaSyCJLp6RKVBqT2-NrNydRxh_0CbUwahURUI";
    let chat_input = document.getElementById("chat_input");
    let chat_output = document.getElementById("chat-output");

    document.getElementById("send-query-button").addEventListener("click", async () => {
      try {
        const genAI = new GoogleGenerativeAI(API_KEY);

        const model = genAI.getGenerativeModel({
          model: "gemini-pro"
        });

        const prompt = chat_input.value;
        const result = await model.generateContent(prompt);
        const response = await result.response;
        const text = response.text();
        chat_output.innerText = text;
      } catch (error) {
        console.log("Something went wrong :(", error);
      } finally {
        chat_input.value = " ";
      }
    });
  </script>



</body>

</html>