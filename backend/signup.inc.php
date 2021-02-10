<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $sqname = $_POST["sqname"];
    $username = $_POST["username"];
    $pwd1 = $_POST["pwd1"];
    $pwd2 = $_POST["pwd2"];

    require_once 'dbh.inc.php';
    require_once '../functions/functions-signup-login.inc.php';

    if (ControlloPwd($pwd1, $pwd2)!== false) {
        header("location: ../signup.php?error=differentpwd");
        exit();
    }

    if (UsernameEsiste($conn, $cf, $email)!== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    CreaUtente($conn, $name, $surname, $email, $cf, $via, $city, $prov, $reg, $img, $type, $pwd1);
} else {
    header("location: ../signup.php");
    exit();
}
