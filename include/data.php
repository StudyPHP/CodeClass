<?php 


$DB = new DB();
$DB->Connect();
$data = $DB->Select("user");

print_r($data);
$title = "Corp";
$user ['login'] = "login";
$user ['password'] = md5('123123');

?>