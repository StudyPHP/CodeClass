<?php
$personal->UserLogin($_POST);
?>
<form action="" method="POST">
    <input type="text" name="login" placeholder="LogIn"><br>
    <input type="password" name="pass" placeholder="Password"><br>
    <input type="submit" name="enter" value="Enter">
    <input type="reset" value="Clean"> 
</form>
New to this site? 
<a href="../?page=personal&module=reg">Sign up!</a>
Want to quit?
<a href="../?page=personal&module=logout">Log Out</a>