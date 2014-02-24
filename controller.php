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

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

