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
                $option = parent::Where("login",$_POST['login'],"=");
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
        if ($_POST['enter'])
        {
            if ($_POST['password']==$_POST['password_check'])
            {
/* Add function check form filling 
$ck_form = array (
    $_POST['surname'],
    $_POST['name'],
    $_POST['patronymic'],
    $_POST['company'],
    $_POST['country'],
    $_POST['phone'],
    $_POST['mail'],
    $_POST['login'],
    $_POST['password'],
    $_POST['password_check'],
    $_POST['enter'],
    );
for ($i=0;$i<count($form['required']);$i++)
{
    if ($form['required'][$i] == 'required')
    {
        if (!$ck_form[$i])
        {
            echo "Пожалуйста заполните поле: $form['coment'][$i]<br/>";    
        }
        else 
        {
            check_pass ($_POST);
        }
    }
}
*/
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
                if ($found = TRUE)
                {
                    echo '<PRE>';
                    print_r($_POST);
                    echo '</PRE>';
                    //$data = parent::Insert('user', $row, $value);
                    //header ('Location: index.php'); 
                    die;
                }
            }
            else
            {
                echo 'Warning: the password is entered incorrectly';
            }
/*
//show_check_form ($form);
//hash_to_cookie ();
//$sql = 'INSERT INTO `user`(`login`, `pass`, `name`, `surname`, `country`, `phone`, `email`, `adress`, `hash`) VALUES("'.$_POST['login'].'", "'.md5($_POST['password']).'", "'.$_POST['name'].'", "'.$_POST['surname'].'", "'.$_POST['country'].'", "'.$_POST['phone'].'", "'.$_POST['mail'].'", "'.$_POST['adress'].'", "'.$_SESSION['hash'].'")';
 */  
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
}
