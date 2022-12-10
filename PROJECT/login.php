<?php
include_once 'header.php';
?>
<!--creating page for logging in-->
<section class="login-form">
<div class="col-sm-12 col-md-6 col-lg-6">
    <h3>Already have an account, then sign in below!</h3>
    <form method="post" action="./inc/login.php">
        <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
        <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
        <input class="btn btn-light" type="submit" value="Login" />
    </form>
</div>

    <!--throwing possible errors that a user will come across while logging in-->

    <?php
    if(isset($_GET["error"])){
        if ($_GET["error"]== "emptyinput"){
            echo "<p> Fill in all fields!</p>";
        }
        else if ($_GET["error"]== "wronglogin"){
            echo "<p>Incorrect login!</p>";

        }
    }
    ?>
</section>

