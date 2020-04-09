<?php 
session_start();
if(!isset($_GET['id'])){
    header("Location: error.php?error=3");
    die();
}
?>