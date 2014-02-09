<?php 
include 'include.php';
include 'template/header.php.tpl'; 
if ($_COOKIE['login']==$user['login']){
?>
<p>Приветствуем, <?=$_COOKIE['login'] ?>!</p>
<a href="exit.php?action=exit">Выйти</a>
<?php 
}
 else {
   echo '<p>Приветствуем посетитель! Авторизируйся!</p><a href="login.php">Вход</a>';
}
?>

<?php include 'template/footer.php.tpl'; ?>
