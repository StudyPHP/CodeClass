<?php

function ContFields($post)
{
    if (!$post['login'] or !$post['password'] )
        echo 'не введен пароль или логин!';
}
function show_title($title)
{
    echo "<title>$title</title>";
}



function valid_login ($user)
{
    $sql = "SELECT pass FROM `user` WHERE `login`='".$_POST['login']."'";
   $valid = mysql_query($sql);
    if($valid){
       $pass = mysql_fetch_assoc($valid);
       if (md5 ($_POST['password'])==$pass['pass']) {
           setcookie ('login',$_POST['login']);
           header('Location:index.php');
        } else {
            echo 'Вы ввели неправильный логин или пароль';
        }
    } else { 
        echo 'Вы ввели неправильный логин или пароль';
    }
    /*if ($_POST['login']==$user['login'])
    {
        
        if (md5($_POST['password'])==$user['password'])
        {
            setcookie ('login',$_POST['login']);
            header ('Location: index.php');
        }
        else 
        {
            echo '<p>Введенные данные неверны!';
        }
    }
    else 
    {
        echo '<p>Введенные данные неверны!';
    }*/
}
function log_out()
{
    if ($_GET['action']=='exit'){
        setcookie ('login');
        header('Refresh: 5, url=http://corpIMT/index.php');
    }
    else {
        echo '<a href="exit.php?action=exit">Выйти</a>';
    }
}
?>