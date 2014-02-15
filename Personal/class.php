<?php
include '../include/DB.php';    //Note: remove after connecting to index.php.
class Personal extends DB
{
    public function __construct() {
        parent::__construct();
    }
    
    function UserLogin()    // OK: function work correct.
    {
        if ($_POST['enter'])
        {
            if ($_POST['password'] && $_POST['login'])
            {
                $option = parent::Where("login","'".$_POST['login']."'","=");
                $array = parent::Select('user','pass',$option);
                if (md5($_POST['password'])==$array[0]['pass']) 
                {
                    //session_start();
                    header('Location: ../index.php');
                    die;
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
    
    function CheckForm()    // OK: function work correct.
    {
        $array = parent::Select('registration_form');
        for ($i=0;$i<count($array);$i++)
        {
            if ($array[$i]['required'] == 'required')
            {
                 if (!$_POST[$array[$i]['name']])
                {
                    echo 'Please fill in this field: "'.$array[$i]['coment'].'"<br/>';    
                }
            }
        }
    }

    function UserRegistere()    // Function works not correctly. See below...
    {
        if ($_POST['enter'])
        {
            if ($_POST['pass']==$_POST['password_check'])
            {
                $this->CheckForm();
                $array = parent::Select('user','login');
                foreach ($array as $key => $value)
                {
                    if ($value['login'] == $_POST['login'])
                    {
                        $found = FALSE;
                        echo 'Warning: this username exists!';
                        break;
                    }
                    else 
                    {
                        $found = TRUE; 
                    }
                }
                if ($found == TRUE)
                {
                    $rem_last_var = array_pop($_POST);     
                    $rem_second_last_var = array_pop($_POST); 
                    $row = array_keys($_POST);
                    $data = parent::Insert('user', $row, $_POST);   // Not work...
                    //session_start();
                    header ('Location: ../index.php'); 
                    die;
                }
            }
            else
            {
                echo 'Warning: the password is entered incorrectly';
            }
        }  
    }
}
