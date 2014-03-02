<?php
$module = array('','page','personal','news','new');
if($_GET)
{
    $page = $_GET['page'];
    if (!array_search($page,$module))
    {
        $page = '404';
    }
}
else{
  $page='page';  
}

$personal = new Personal();
$personal->Log_in($_POST['login'], $_POST['pass']);