<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];

    require_once 'config/database.php';
    require_once 'config/functions.php';

    if (emptyInputLogin($email, $wachtwoord) !== false) {
        header("location: login.php?error=emptyinput");
        exit();
    }

    loginGebruiker($conn, $email, $wachtwoord);
}
else {
    header("location: index.php");
    exit();
}
