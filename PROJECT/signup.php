<?php
include_once 'header.php';
?>
<!--creating page for signing up-->

<section class="signup-form">
    <h2>Register</h2>
    <div class="signup-form-form">
        <form method="post" action="./inc/signup.php">
            <input  name="first_name" type="text" placeholder="First Name" >
            <input  name="last_name" type="text" placeholder="Last Name" >
            <input  name="username" type="text" placeholder="Username" >
            <input  name="blood_group" type="text" placeholder="Blood group"  >
            <input  name="password" type="password" placeholder="Password"  >
            <input  name="confirm" type="password" placeholder="Confirm Password" >
            <button name="submit" type="submit" >Register </button>
        </form>
    </div>

<?php
/* throwing possible errors that a user will come across while signing up*/
if(isset($_GET["error"])){
    if ($_GET["error"]== "emptyinput"){
        echo "<p> Fill in all fields!</p>";
    }
       else if ($_GET["error"]== "invalidtext"){
            echo "<p>choose a proper username!</p>";

       }
       else if ($_GET["error"]== "passwordsdon'tmatch"){
           echo "<p>passwords doesn't match!</p>";
       }
       else if ($_GET["error"]== "usernametaken"){
           echo "<p>username already taken!</p>";
       }

       /* when the user enter every input correctly without the mentioned error*/

       else if ($_GET["error"]== "none"){
           echo "<p>you have signed in !</p>";
       }

}
?>
</section>
