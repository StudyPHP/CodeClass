<?php
$news = new News();
if ($_GET['module'])
{
    $news->ShowNew();
    include 'new.tpl';
}
else 
{
    include 'news.tpl';
} 