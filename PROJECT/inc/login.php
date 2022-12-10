<?php
// creating our login script //
if (isset($_POST["submit"])) {

    $username = $_POST["Username"];
    $password = $_POST["Password"];
    require_once './inc/dbh.php';
    require_once './inc/functions.php';

    /*reminding the user by showing an error if they forget any input */

    if (emptyInputLogin($username, $password) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    /* create user if everything looks good else come back to  page */

    loginUser($conn, $username, $password);

}
else{
    header("location: ../login.php");

}