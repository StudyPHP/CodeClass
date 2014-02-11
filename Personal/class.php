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
	$this->data = parent::Select('user','pass',$this->option);
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
    
    function ShowForm () 
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
    	$this->array = parent::Select('registration_form');
        return $array; // ?...
    	for ($i=0;$i<count($this->array['name'])-1;$i++)
	{
        	echo '<input type="'.$this->array['type'][$i].'" name="'.$this->array['name'][$i].'" placeholder="'.$this->array['placeholder'][$i].'" '.$this->array['required'][$i].' pattern="'.$this->array['pattern'][$i].'">  '.$this->array['coment'][$i];
		if ($this->array['required'][$i] == 'required')
		{
        		echo ' *';
		}
        	echo '<br/>';
    	}
    	if (in_array ('required',$this->array['required']))
    	{
        	echo '<p>* - поля, обязательные для заполнения </p>';
    	}
    	echo '<p><input type="submit" name="'.end ($this->array['name']).'" value="'.end ($this->array['coment']).'">   <input type="reset" value="Очистить"></p>'; 
    }
}
