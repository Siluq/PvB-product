<?php

    function emptyInputSignup($naam, $email, $wachtwoord, $wachtwoordR, $geboortedatum, $tel) {
        $result;
        if (empty($naam) || empty($email) || empty($wachtwoord) || empty($wachtwoordR) || empty($geboortedatum) || empty($tel)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email) {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function wachtwoordMatch($wachtwoord, $wachtwoordR) {
        $result;
        if ($wachtwoord !== $wachtwoordR) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidTel($tel) {
        $result;
        if (!preg_match("/^[0-9]{10}+$/", $tel)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function emailBestaat($conn, $email) {
        $sql = "SELECT * FROM gebruikers where email='$email';";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header ("Location: register.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createGebruiker($conn, $naam, $email, $wachtwoord, $geboortedatum, $tel) {
        $sql = "INSERT INTO gebruikers(naam, email, wachtwoord, geboortedatum, tel) VALUES (?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header ("Location: register.php?error=stmtfailed");
            exit();
        }

        $hashedPass = password_hash($wachtwoord, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sssss", $naam, $email, $hashedPass, $geboortedatum, $tel);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header ("Location: register.php?error=none");
        exit();
    }

    function emptyInputLogin($email, $wachtwoord) {
        $result;
        if (empty($email) || empty($wachtwoord)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function loginGebruiker($conn, $email, $wachtwoord) {
        $emailBestaat = emailBestaat($conn, $email);

        if ($emailBestaat === false) {
            header ("Location: register.php?error=verkeerdelogin");
            exit();
        }

        $wachtwoordHashed = $emailBestaat["wachtwoord"];
        $checkWachtwoord = password_verify($wachtwoord, $wachtwoordHashed);

        if($checkWachtwoord === false) {
            header ("Location: login.php?error=verkeerdelogin");
            exit();
        }
        else if ($checkWachtwoord === true) {
            session_start();
            $_SESSION["id"] = $emailBestaat["id"];
            $_SESSION["naam"] = $emailBestaat["naam"];
            header ("Location: index.php");
            exit();
        }
    }
