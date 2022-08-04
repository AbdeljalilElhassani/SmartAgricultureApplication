<?php
if(!isset($_GET['c'])){
    $_GET['c']="";
}
?>
<?php
include('header.php');
session_start();
?>
<button onclick="myFunction()" id="darkLightModeSwitch" class="darkModeButton">

</button>
<div class="logo" id="logo">
</div>
        <form method="post" action="check.php" >
            <img src="./images/LoginIcon.png" alt="">
            <h1 id="loginText">Login</h1>
            <input type="text" placeholder="Login" name="login">
            <input type="password" placeholder="Password" name="pass" >
            <?php 
            if($_GET['c'] == "true"){
                echo "<h3>Login Failed ! please try again !</h3>";
            }
            ?>
            <input type="submit" value="Login" class="loginBtn" name="submit">
        </form>


    <?php
    include('footer.php');
    ?>