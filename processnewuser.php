<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        // Getting submitted user data from database
        $con = new mysqli("127.0.0.1", "root", "mattsql69420", "mplayer");
            if ($con->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        $hashedpass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $id = null;
        $stmt = $con->prepare("INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (?, ?, ?, ?);");
        $stmt->bind_param('ssss', $id, $username, $email, $hashedpass);
        $stmt->execute();
        $stmt->close();
        $con->close();
        if(mysqli_error($con)){
            echo mysqli_error($con);
            die();
        } else{
            header("Location: index.php?registersuccess=true");
        }
    } else {
        die("needed info is empty");
    }
}else {
    die("all info is empty");
}
?>