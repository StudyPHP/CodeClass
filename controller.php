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