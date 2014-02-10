<?php
if (!$_GET['registration'])
{
?>

<div>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Логин"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <input type="submit" name="enter" value="Вход">
    </form>
    Вы новый пользователь? Зарегистрируйтесь!
    <a href="personal.php?registration=1">Регистрация</a>
</div>

<?php
}
if ($_GET['registration'] == 1}
{
?>

<div>
    <form method="POST" action="">
        Форма для регистрации:
        <pre>
<?php
//show_form ($form);
?>
        </pre>
    </form>
    Вы уже зарегистрированы? Авторизируйтесь!
    <a href="login.php">Авторизация</a>>
</div>
<?php
}
?>