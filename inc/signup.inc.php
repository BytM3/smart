<?php
if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $rpwd = $_POST["rpwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if ( emptyInputSignup($name, $email, $username, $pwd, $rpwd ) !== false){
        header ("location: ../sign-up.php?error=emptyinput");
        exit();    
    }
    if (uidExists($conn, $username,$email) !== false){
        header ("location: ../sign-up.php?error=usernametaken");
        exit();    
    }
    creatUser($conn, $name, $mail,$username, $pwd);
}
else{
    header ("location: ../sign-up.php");
}