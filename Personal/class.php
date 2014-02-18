<?php
class Personal extends DB {
    //public $data;
    
    public function __construct() {
        parent::__construct();
    }
    
    function Log_in($login, $pass) {
        do {
            if (!(isset($login) && isset($password))) break;
            
            $option = parent::Where('login', $login, '=');
            $option .= parent::Limit(1);
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

                //header('Location: index.php');
            }
            
            break;
        } while (false);
    }
    
    function Log_out() {
        $option = parent::Where('id', $_SESSION['auth_id'], '=');
        
        if (parent::Update('user', 'hash', '', $option)) {
            setcookie('hash');
            session_unset();

            //header('Location: index.php');
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
        
        $option = parent::Where('hash', $_COOKIE['hash'], '=');
        $option .= parent::Limit(1);
        $array = parent::Select('user', 'login', $option);

        if (count($array)) {
           $answer = $array[0]['login'];
        }

        return $answer;
    }
}