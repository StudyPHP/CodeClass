<?php
if ($_POST['enter'])
{
    if ($_POST['password'] && $_POST['login'])
    {
        if (!$_POST['name'])
        {
            //cont_fields ($post);
            //header  ('Location: index.php'); 
        }
        else
        {
            echo "Warning: invalid login or password!<br>";
        }
        if ($_POST['password']==$_POST['password_check'])
        {
            //show_check_form ($form);
            //hash_to_cookie ();
            //$sql = 'INSERT INTO `user`(`login`, `pass`, `name`, `surname`, `country`, `phone`, `email`, `adress`, `hash`) VALUES("'.$_POST['login'].'", "'.md5($_POST['password']).'", "'.$_POST['name'].'", "'.$_POST['surname'].'", "'.$_POST['country'].'", "'.$_POST['phone'].'", "'.$_POST['mail'].'", "'.$_POST['adress'].'", "'.$_SESSION['hash'].'")';
            //header ('Location: index.php'); 
            //die;
        }
    }    
}
   
if (!$_GET['registration'])
{
    include 'form_login.tpl';
}
if ($_GET['registration'] == 1)
{
    include 'form_reg.tpl';
}
?>
