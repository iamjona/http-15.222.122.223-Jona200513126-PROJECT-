<?php
/* empty sign up page*/
function emptyInputSignup($first_name,  $last_name,  $user_name, $blood_group, $password, $confirm) {
    $result;
    if (empty($first_name) || empty( $last_name) || empty($user_name) || empty($blood_group) || empty($password) || empty($confirm)){
        $result = true;
    }
    else
        $result = false;
}
/*create function for invalid user name */
function invalidText($user_name) {
   $result;
   if (!preg_match("/^[a-zA-Z0-9]*$/", $user_name)){
   $result = true;
}
else{
    $result = false;
}
return $result;
}

/*create function for is unmatched password */
function passwordMatch($password, $confirm) {
$result;
   if ($password !== $confirm){
       $result = true;
   }
   else{
       $result = false;
   }
return $result;
}
/*create function for the already existing username */

function  textExists($user_name, $conn)
{
    $sql = "SELECT * FROM users WHERE text = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $user_name);
    mysqli_stmt_bind_param($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
/*create function inserting values into users*/

function createUser($conn, $user_name, $blood_group, $password)
{
    $sql = "INSERT INTO users(first_name, last_name, blood_group, user_name, password, confirm) VALUES(?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    /* hashing the users passwords*/

    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssssss", $first_name, $last_name, $blood_group, $user_name, $hashedpassword, $confirm);
    mysqli_stmt_bind_execute($stmt);
mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exist();
}
function emptyInputLogin($username, $password) {
    $result;
    if(empty($username) || empty($password)){
        $result = true;
    }
    else
        $result = false;
}
/*create function for wrong login if the user enter wrong information and throw error to display what they have entered is wrong */
function loginUser($conn, $username, $password)
{
    $textExists = textExists($username, $conn);
    if ($textExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    $passwordHashed = $textExists["usersPassword"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPassword === true) {
        session_start();
        $_SESSION["userid"] = $textExists["usersId"];
        $_SESSION["userid"] = $textExists["userstextid"];
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    }
