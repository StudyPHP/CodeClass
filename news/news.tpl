<form method="POST" action="">
    Show: 
    <select name="count">
        <option  value="3" selected>3</option>
        <option  value="5">5</option>
        <option  value="10">10</option>
    </select>
    <input type="submit" name="enter" value="preview">
</form>

<?php
$news ->ShowNews($_POST);
if (!$_SERVER['HTTP_REFERER'])
{
?>

    </p>
    <a href="
       
<?php 
echo $_SERVER['PHP_SELF'];
}
else
{
?>

	<a href="<?=$_SERVER['HTTP_REFERER']?>">Go Back...</a>
        </p>
        <a href="

<?php
$int = 2;
if ($_GET['page'])
{
    $int = $_GET['page']+1;
}
    echo $_SERVER['PHP_SELF'].'?page='.$int;
}
?>

">...forward</a>