<?php
//Note: remove after connecting to index.php.
include '../include/DB.php';    
include 'class.php';    
// End note: remove after connecting to index.php.

 $news = new News();
 include 'news.tpl';
 
 