<?php

$connect = mysql_connect('localhost', 'root', '');
mysql_select_db('school_db');

if (!$connect)
    echo 'Подключение к базе отсутствует';
print_r($connect);
?>