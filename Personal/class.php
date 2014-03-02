<?php  
class Personal extends DB
{
    public function __construct() {
        parent::__construct();
    }
    
/*    function UserLogin()    // OK: function work correct.
    {
        if ($_POST['enter'])
        {
            if ($_POST['password'] && $_POST['login'])
            {
                $option = parent::Where("login",$_POST['login'],"=");
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
     *
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
}*/

    function Log_in($login, $pass) {
        do {
            if (!(isset($login) && isset($pass))) break;
            
            $option = parent::Where('login', $login, '=');
            $option .= parent::Limit(0, 1);
            $array = parent::Select('user', 'id, pass', $option);
            
            if (!count($array)) {
                echo 'Wrong pass or login. Try again!';
                break;
            }
            
            if (md5($pass) != $array[0]['pass']) {
                echo 'Wrong pass or login. Try again!';
                break;
            }
            
            $hash = $this->Get_hash(10);
            $option = parent::Where('id', $array[0]['id'], '=');

            if (parent::Update('user', 'hash', $hash, $option)) {
                setcookie('hash', $hash);
                $_SESSION['auth_id'] = $array[0]['id'];
            }
            
            break;
        } while (false);
    }
    
    function Log_out($flag) {
        if ($flag) {
            $option = parent::Where('id', $_SESSION['auth_id'], '=');

            if (parent::Update('user', 'hash', '', $option)) {
                setcookie('hash');
                session_unset();
                $flag = false;
            }
        }
    }
    
    function Register($post) {
        $msg='';
        
        foreach ($post as $key => $value) {
            if ($value == '') {
                if (substr($key, 0, 2) == 'i_')
                    $msg .= ($msg ? ', ' : 'Fill out fields: ').substr($key, 2);
            } else {
                 if ($key != 'enter') {
                    if ($key == 'name') {
                        $str_name = explode(' ', $value);
                        $arr_fields['surname'] = $str_name[0];
                        $arr_fields['name'] = $str_name[1];
                    } else {
                        $arr_fields[$key] = $value;
                    }
                 }
            }
        }

        if ($msg) {
            return $msg;
        } else {
            $fields = array('login', 'pass', 'name', 'surname', 'country', 'phone', 'email', 'adres', 'status');
            $values = array($arr_fields['i_login'], md5($arr_fields['i_password']), $arr_fields['name'], 
                            $arr_fields['surname'], $arr_fields['i_country'], $arr_fields['phone'],
                            $arr_fields['i_email'], $arr_fields['adress'], 'user');
            if (parent::Insert('user', $fields, $values)) {
                return $msg = 'Thank you for registration!'
                        .'Now you can <a href="login.php">come in</a>';
            }
        }
    }
    
    function Get_hash($count) {
        $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        for ($i=0; $i<$count; $i++) {
            $hash .= substr($str, mt_rand(0, strlen($str)-1), 1);
        }

        return $hash;
    }

    function Chk_hash() {
        $answer = '';
        
        if ($_COOKIE['hash']) {
            $option = parent::Where('hash', $_COOKIE['hash'], '=');
            $option .= parent::Limit(0, 1);
            $array = parent::Select('user', 'login', $option);
        }

        if (count($array)) {
           $answer = $array[0]['login'];
        }

        return $answer;
    }
}
