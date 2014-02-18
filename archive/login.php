<?php 
include 'include.php';
$title = "LOGIN GO!!!";

if (isset($_POST['enter'])) 
{
    ContFields($_POST);
    valid_login ($user);
}

include 'template/header.php'; 

?>
<form action="" method="POST">
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="password" name="password" placeholder="Пароль"><br>
    <input type="submit" name="enter" value="Вход">
</form>
<?php include 'template/footer.php'; ?>