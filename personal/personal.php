<?php
include 'class.php';
$personal = new Personal();

if (!$_GET['registration'])
{
    include 'form_login.tpl';
}
if ($_GET['registration'] == 1)
{
    include 'form_reg.tpl';
}
