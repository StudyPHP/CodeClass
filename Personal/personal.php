<?php
 $login_form = new Personal();
 
 //$login_form->Show()
 if ($login_form->Chk_hash()) {
    include 'account.tpl';
 } else {
     include 'login_form.tpl';
 }