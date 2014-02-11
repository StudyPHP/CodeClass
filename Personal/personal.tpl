<?php
if ($_POST['enter'])
{
    if ($_POST['password'] && $_POST['login'])
    {
        if (!$_POST['name'])
        {
            //cont_fields ($post);
            header  ('Location: index.php'); 
        }
        else
        {
            echo "Неверно введены логин или пароль!";
        }
        if ($_POST['password']==$_POST['password_check'])
        {
            //show_check_form ($form);
            //hash_to_cookie ();
            //$sql = 'INSERT INTO `user`(`login`, `pass`, `name`, `surname`, `country`, `phone`, `email`, `adress`, `hash`) VALUES("'.$_POST['login'].'", "'.md5($_POST['password']).'", "'.$_POST['name'].'", "'.$_POST['surname'].'", "'.$_POST['country'].'", "'.$_POST['phone'].'", "'.$_POST['mail'].'", "'.$_POST['adress'].'", "'.$_SESSION['hash'].'")';
            header ('Location: index.php'); 
            die;
        }
    }    
}
?>

<?php    
if (!$_GET['registration'])
{
?>

<form action="" method="POST">
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="password" name="password" placeholder="Пароль"><br>
    <input type="submit" name="enter" value="Вход">
</form>
Вы новый пользователь? Зарегистрируйтесь!
<a href="personal.php?registration=1">Регистрация</a>

<?php
}
if ($_GET['registration'] == 1)
{
?>

<form method="POST" action="">
    Форма для регистрации:
    <pre>
<?php
//show_form ($form);
echo "...здесь когдато шото будет!...";
?>
    </pre>
</form>
Вы уже зарегистрированы? Авторизируйтесь!
<a href="personal.php">Авторизация</a>

<?php
}
?>
