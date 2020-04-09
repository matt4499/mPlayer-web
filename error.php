<?php 
if(isset($_SESSION)){
session_destroy();
}
if(isset($_GET['error'])){
    $error = (string) $_GET['error'];
} else {
    $error = "unknown";
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
    <title> mPlayer - Error </title>
    <style>
    body {
        background-color: #121212 !important
    }
    h1{
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
    <h1> <center> Error </center> </h1>
    <div class="row center-align">
      <p> An error has occured. </p>
      <p> Please report this to Matt4499 </p>
        <?php 
        echo "<p> Error Code: " . strval($error) . " </p>";
        ?>
    </div>
</body>

</html>