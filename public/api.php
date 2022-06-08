<?php
include('../src/preload.php');

if( isset($_POST['signup'])){
    $mysql->query("INSERT INTO User (email, paswoord) VALUES ('".$_POST['email']."', '".$_POST['password']."')");
    header('Location: /');
}

if( isset($_POST['login'])){
    $user = $mysql->query("SELECT * FROM User WHERE email = '".$_POST['email']."' AND paswoord = '".$_POST['password']."'");
    if($user->num_rows > 0){
        $_SESSION["user"] = $user->fetch_array();
        setcookie("loggedin", $_POST['email'], time () +86400);    
    }        
    header('Location: /');
}

if( isset($_GET['logout'])){
    session_unset();
    header('Location: /');
}

