<?php
include 'class.php';
$personal = new Personal();

switch ($_GET['module'])
{
    case 'reg': include 'form_reg.tpl';
    break;
    case 'logout': include 'form_logout.tpl';
    break;
    case 'person': include 'personal.tpl';
    break;
    default : include 'form_login.tpl';
}