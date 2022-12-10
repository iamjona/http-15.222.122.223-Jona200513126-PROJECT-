<?php
/*creating our signup script*/

if (isset($_POST["submit"])) {

    $first_name =$_POST["text"];
    $last_name =$_POST["text"];
    $user_name =$_POST["text"];
    $blood_group =$_POST["text"];
    $password =$_POST["password"];
    $confirm =$_POST["password"];

/*including database and functions*/
    require_once './inc/dbh.php';
    require_once './inc/functions.php';

/*reminding the user by showing an error if they forget any input */

    if (emptyInputSignup($first_name,  $last_name,  $user_name, $blood_group, $password, $confirm) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    /*reminding the user by showing an error if they enter invalid text */
    if (invalidText($user_name) !== false) {
        header("location: ../signup.php?error=invalidtext");
        exit();
    }
    /* reminding the user by showing an error if they enter invalid password */
    if (invalidPassword($password) !== false) {
        header("location: ../signup.php?error=invalidpassword");
        exit();
    }
    /* reminding the user by showing an error if they enter different passwords */
    if (passwordMatch($password, $confirm) !== false) {
        header("location: ../signup.php?error=passwordsdon'tmatch");
        exit();
    }
    /* reminding the user by showing an error if the username is not available */
    if (textExists($user_name, $conn) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    /* create user if everything looks good else come back to signup page*/

    createUser($conn, $user_name, $blood_group, $password);
}
else {
    header("location: ../signup.php");
}