<?php

if (isset($_POST["submit"])) {
    
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];
    $wachtwoordR = $_POST["wachtwoordR"];
    $geboortedatum = $_POST["geboortedatum"];
    $tel = $_POST["tel"];

    require_once 'config/database.php';
    require_once 'config/functions.php';

    if (emptyInputSignup($naam, $email, $wachtwoord, $wachtwoordR, $geboortedatum, $tel) !== false) {
        header("location: register.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: register.php?error=invalidemail");
        exit();
    }

    if (wachtwoordMatch($wachtwoord, $wachtwoordR) !== false) {
        header("location: register.php?error=wachtwoordnomatch");
        exit();
    }

    if (invalidTel($tel) !== false) {
        header("location: register.php?error=invalidtel");
        exit();
    }

    if (emailBestaat($conn, $email) !== false) {
        header("location: register.php?error=emailbestaat");
        exit();
    }

    createGebruiker($conn, $naam, $email, $wachtwoord, $geboortedatum, $tel);

}
else {
    header("location: register.php");
}


// extract($_POST);
// include("./config/database.php");
// $sql=mysqli_query($conn,"SELECT * FROM gebruikers where email='$email'");
// if(mysqli_num_rows($sql)>0)
// {
//     echo "Email Id Already Exists"; 
//     exit;
// }
// else(isset($_POST['save']));
// {

//         $query="INSERT INTO gebruikers(naam, email, wachtwoord, geboortedatum, tel) VALUES ('$naam', '$email', '$wachtwoord', '$geboortedatum', '$tel')";
//         $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
//         header ("Location: register.php?error=success");

// }

?>