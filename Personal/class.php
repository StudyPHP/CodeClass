<?php
include '../include/DB.php';
class Personal extends DB
{
    public function __construct() {
        parent::__construct();
    }
    
    function UserLogin()
    {
        $option = parent::Where("login",$_POST['login'],"=");
	$array = parent::Select('user','pass',$this->option);
        if($array)
        {
            if (md5($_POST['passoword'])==$array['pass']) 
            {
                header('Location: ../index.php');
            } 
            else 
            {
                echo 'Внимание: данные введены неверно! 2';
            }            
        }
        else 
        { 
            echo 'Внимание: данные введены неверно! 1';
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
        $array = parent::Select('registration_form'); //проблемы с массивом - переписать!
    	for ($i=0;$i<count($array['name'])-1;$i++)
	{
        	echo '<input type="'.$array['type'][$i].'" name="'.$array['name'][$i].'" placeholder="'.$array['placeholder'][$i].'" '.$array['required'][$i].' pattern="'.$array['pattern'][$i].'">  '.$array['coment'][$i];
		if ($array['required'][$i] == 'required')
		{
        		echo ' *';
		}
        	echo '<br/>';
    	}
    	if (in_array ('required',$array['required']))
    	{
        	echo '<p>* - поля, обязательные для заполнения </p>';
    	}
    	echo '<p><input type="submit" name="'.end ($array['name']).'" value="'.end ($array['coment']).'">   <input type="reset" value="Очистить"></p>'; 
    }
}
