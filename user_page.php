<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style.scss">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styl.css">

</head>
<body>
<div class="navigation">
    <ul>

      <li class="list">
        <a href="index.html">         
            <samp class="icon">
            <ion-icon name="home-outline"></ion-icon>
          </samp>
          <samp class="text">Home</samp>
        </a>
      </li>
      <li class="list">
        <a href="1.html">
          <samp class="icon">
            <ion-icon name="logo-android"></ion-icon>
          </samp>
          <samp class="text">Android</samp>
        </a>
      </li>
      <li class="list">
        <a href="services.html">
          <samp class="icon">
            <ion-icon name="settings-outline"></ion-icon>
          </samp>
          <samp class="text">Services</samp>
        </a>
      </li>
      <li class="list">
        <a href="login_form.php">
          <samp class="icon">
            <ion-icon name="game-controller-outline"></ion-icon>
          </samp>
          <samp class="text">Games</samp>
        </a>
      </li>
      <li class="list">
        <a href="about.html">
          <samp class="icon">
            <ion-icon name="tablet-portrait-outline"></ion-icon>
          </samp>
          <samp class="text">About</samp>
        </a>
      </li>
      <li class="list">
        <a href="news.html">
          <samp class="icon">
            <ion-icon name="newspaper-outline"></ion-icon>
          </samp>
          <samp class="text">News</samp>
        </a>
      </li>
    </ul>
  </div>
<div class="container">

   <div class="content">
      <h3>HI, <span><?php echo $_SESSION['user_name'] ?></span></h3>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>