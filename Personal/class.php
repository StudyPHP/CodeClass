<?php
class Personal extends DB
{
    private $data;
    private $option;
    private $pass;

    public function __construct() {
        parent::__construct();
        //$this->UserLogin();
        //$this->UserRegistere();
    }
    
    function UserLogin()
    {
        $this->option = parent::Where('login','=','$_POST["login"]');
	return $option;
	$this->data = parent::Select('pass','user',$this->option);
        return $data;
        $this->valid = mysql_query($this->data);
        if($this->valid)
        {
            $this->pass = mysql_fetch_assoc($valid);
            if (md5 ($_POST['password'])==$pass['pass']) 
            {
                //hash_to_cookie ();
                //header('Location: index.php');
            } 
            else 
            {
                echo 'Внимание: не введен логин или пароль!';
            }            
        }
        else 
        { 
            echo 'Внимание: не введен логин или пароль!';
        }
    }
    
    function UserRegistere()
    {
        //
    }
}