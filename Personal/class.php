<?php
include '../include/DB.php';
class Personal extends DB
{
    public function __construct() {
        parent::__construct();
    }
    
    function UserLogin()    // OK: function work correct.
    {
        $option = parent::Where("login",$_POST['login'],"=");
        if ($_POST['enter'])
        {
            if ($_POST['password'] && $_POST['login'])
            {
                $array = parent::Select('user','pass',$option);
                if (md5($_POST['password'])==$array[0]['pass']) 
                {
                    header('Location: ../index.php');
                } 
                else 
                {
                    echo 'Warning: the data is entered incorrectly!';
                }               
            }
            else 
            {
               echo 'Warning: the data is entered incorrectly!';
            }
        }
    }
    
    function UserRegistere()
    {
        //
    }
    
    function ShowForm ()    // OK: function work correct.
    /*
    Need to create a table "registration_form" in MySQL for the generate of the registration form
    Field:
	    name
	    type
	    placeholder
	    required
	    pattern
	    coment
     */
    {
        $array = parent::Select('registration_form');
    	for ($i=0;$i<count($array);$i++)
	{
            echo '<input type="'.$array[$i]['type'].'" name="'.$array[$i]['name'].'" placeholder="'.$array[$i]['placeholder'].'" '.$array[$i]['required'];
            if ($array[$i]['pattern'])
            {
                echo ' pattern="'.$array[$i]['pattern'].'"';   
            }
            echo '>  '.$array[$i]['coment'];
            if ($array[$i]['required'] == 'required')
            {
        	echo ' *';
            }
            echo '<br/>';
    	}
    }
}