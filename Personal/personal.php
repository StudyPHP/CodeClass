<?php
 $login_form = new Personal();
 
 if ($login_form->Chk_hash()) {
     echo 'Hello, '.$login_form->Chk_hash().'!'
         .'<br><a href="">Exit</a>';
     
 } else {
     include 'login_form.tpl';
 }