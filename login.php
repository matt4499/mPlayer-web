<html>
<head>
    <!-- jquery js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Material CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Material JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title> mPlayer - Login </title>
    <style>
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: black;
        opacity: 1; /* Firefox */
    }
    body {
        background-color: #121212 !important
    }
    h1{
        color: white !important;
    }
</style>
</head>

<body>
    <nav class="red darken-4" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">mPlayer</a></div>
    </nav>
    <h1> <center> mPlayer Login </center> </h1>
    <div class="row center-align">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
        <form action="processlogin.php" method="post" class="col s12">
            <div class="input-field col s12">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Submit" class="btn red darken-4">
            </div>
        </form>
        </div>
    </div>
</body>

</html>