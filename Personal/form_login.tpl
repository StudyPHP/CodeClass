<?php
$personal->UserLogin($_POST);
?>
<form action="" method="POST">
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="password" name="password" placeholder="Пароль"><br>
    <input type="submit" name="enter" value="Вход">
</form>
Вы новый пользователь? Зарегистрируйтесь!
<a href="personal.php?registration=1">Регистрация</a>