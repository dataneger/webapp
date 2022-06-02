<?php
include('../src/preload.php');

if( isset($_POST['signup'])){
    $mysql->query("INSERT INTO User (email, paswoord) VALUES ('".$_POST['email']."', '".$_POST['password']."')");
        echo("Error description: " . $mysql -> error);
        header('Location: /');
}
//INSERT INTO User (email, paswoord) VALUES (joris@bruijn.nl, ingetiktwachtwoord)
//var_dump($_POST);
    // if ($_GET['delete'] == true) {
    //     echo 'deleting user' . $_GET['userid'];
    //     $mysql->query("delete from user where id = " . $_GET['userid']);
    // }
