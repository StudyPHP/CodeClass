<?php
$personal = new Personal();
if ($personal->Chk_hash()) {
?>
Hello, user!
<a href="">Exit</a>
<?php
} else {
?>
<form action="" method="POST">
    <input type="text" name="login" placeholder="LogIn"><br>
    <input type="password" name="pass" placeholder="Password"><br>
    <input type="submit" name="enter" value="Enter">
    <input type="reset" value="Clean"> 
</form>
New to this site? 
<a href="index.php?page=personal&registration=1">Sign up!</a>
<?php
}
?>