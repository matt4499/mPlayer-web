<?php
session_start();
session_destroy();
header("refresh:3;url=index.php");
?>
<html>
<head>
    <!-- jquery js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Material CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Material JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title> mPlayer - Logged Out </title>
    <style>
    body {
        background-color: #121212 !important
    }
    h2{
        color: white !important;
    }
    p{
        color: white !important;
    }
</style>
</head>

<body>
    <nav class="red darken-4" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">mPlayer</a></div>
    </nav>
    <h2> <center> Logged Out </center> </h2>
    <div class="row center-align">
      <p> You have been logged out. </p>
      <p> Redirecting in 3 seconds </p>
    </div>
</body>

</html>