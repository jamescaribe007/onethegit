<?php
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 if ($username === "asteroide77" && $password === "secret") {
    session_start();
    $_SESSION['username'] = $username; 
    header('location:logged.php');
 } else {    
    //session_start();
    //session_unset();
    //session_destroy();
    $message = "You've tried to sign with an incorrect account or password";   
    header('location:index.php?message='.$message);
 }
?>