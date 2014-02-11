<?php
/*
if ($_POST['enter'])
{
    if ($_POST['password']==$_POST['password_check'])
    {
        //hash_to_cookie ();
        //$sql = 'INSERT INTO `user`(`login`, `pass`, `name`, `surname`, `country`, `phone`, `email`, `adress`, `hash`) VALUES("'.$_POST['login'].'", "'.md5($_POST['password']).'", "'.$_POST['name'].'", "'.$_POST['surname'].'", "'.$_POST['country'].'", "'.$_POST['phone'].'", "'.$_POST['mail'].'", "'.$_POST['adress'].'", "'.$_SESSION['hash'].'")';
        header ('Location: index.php'); 
    }
}
*/
?>

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
    <a href="personal.php">Авторизация</a>
</div>
<?php
}
?>
