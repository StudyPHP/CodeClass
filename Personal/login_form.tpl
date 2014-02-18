<?php
    $login_form->Log_in($_POST['login'], $_POST['password']);
?>
<form action="" method="post">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="password" name="password" placeholder="Password"><br>
    
    <input type="submit" name="enter" value="Log in"><br>
    <a href="reg_form.php">Registration</a>
</form>