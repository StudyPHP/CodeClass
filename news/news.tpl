<!--
<p>
</p>
<hr>

    <div>
        <a href="<?=$data['url']?>">
            <img src="images/<?=$data['media']?>">
        </a>
    </div>

    <h4>
        <a href=""><?=$data['title']?></a>
    </h4>
    <p><?=$data['day'].$data['time']?></p>
    <p><?=$data['category']?></p>
    <p> 
-->
<?php
$news ->ShowNews();
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
echo $_SERVER['PHP_SELF'].'?id=';
}
?>

">...forward</a>