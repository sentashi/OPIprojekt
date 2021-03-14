<?php


$user = "admin";
$pass = "admin123!";

    if(isset($_POST["username"])){
        echo $_POST["username"].'<br>';
        echo $user.'<br>';
    }
    if(isset($_POST["password"])){
        echo $_POST["password"].'<br>';
        echo $pass;
    }

    if($_POST["username"] == $user && $_POST["password"] == $pass){
        header('Location: index.php');
        exit;
    }
    else{
        header('Location: prijava.php');
    }
?>