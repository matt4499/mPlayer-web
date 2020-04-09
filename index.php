<?php 
session_start();
if(isset($_GET['registersuccess'])){
    $registersuccess = "<script> toastr.success('Success', 'Welcome to mPlayer!')</script>";
}
if(isset($_GET['loginsuccess'])){
    $loginsuccess = "<script> toastr.success('Success', 'Welcome back to mPlayer!')</script>";
}
if(isset($_SESSION['user_name'])){
    $LoggedInUsername = $_SESSION['user_name'];
}
?>
<html>
<head>
    <!-- jquery js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Material CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Material JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- plyr.io JS -->
    <script src="https://cdn.plyr.io/3.5.6/plyr.js"></script>
    <!-- plyr.io CSS -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css" />
    <!-- mPlayer JS -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/2.5.5/shaka-player.compiled.js" integrity="sha256-HmOZIJNxKvdI9D7Iu/c2VFEOV3cczdsRADIjmzhioqI=" crossorigin="anonymous"></script>
    <script src="mPlayer.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title> mPlayer - Home </title>
    <style>
    body {
        background-color: #121212 !important
    }
    h1{
        color: white !important;
    }
</style>

</head>

<body>
    <?php 
    if(isset($registersuccess)){ echo $registersuccess; } 
    if(isset($loginsuccess)){ echo $loginsuccess; } 
    ?>
    <nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" class="brand-logo">mPlayer</a>
    <?php
    if(isset($_SESSION['user_name'])){
      echo '
      <ul class="right hide-on-med-and-down">
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a>', $_SESSION['user_name'], '</a></li>
      </ul>
    </div>
    ';
    } else {
        echo '
      <ul class="right hide-on-med-and-down">
        <li><a href="login.php">Login</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="register.php">Register</a></li>
      </ul>
    </div>
    ';
    }
    ?>
  </nav>
    <h1> <center> yes </center> </h1>
    <div class="containercustom">
      <video id="player" playsinline controls>
      </video>
    </div>
</body>

</html>