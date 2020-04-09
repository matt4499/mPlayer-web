<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['email'] ) && isset( $_POST['password'] ) ) {
        // Getting submitted user data from database
        $con = new mysqli("127.0.0.1", "root", "mattsql69420", "mplayer");
        if ($con->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();
        if(!isset($user)){
            header('Location: error.php?error=0');
            die();
        }
        $stmt->close();
        $con->close();
    	// Verify user password and set $_SESSION
    	if ( password_verify( $_POST['password'], $user->password ) ) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->username;
            header('Location: index.php?loginsuccess=1');
    	} else {
            die();
            header('Location: error.php?error=0');
        }
    } else {
        die();
        header('Location: error.php?error=1');
    }
} else {
    die();
    header('Location: error.php?error=2');
}
?>