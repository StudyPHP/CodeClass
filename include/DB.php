<?php
class DB {
    private $host = "localhost";
    private $user = "root";
    private $db_name = "school_db";
    private $pass = "";
    public $conn;
    
    function Connect (){
      $this->conn = mysql_connect($this->host, $this->user, $this->pass);
      mysql_select_db($this->db_name);
    }
    function Select($table,$row="*",$option=false)
    {
      if(!$option){
         $sql = "SELECT $row FROM $table"; 
      }
      if($option){
         $sql = "SELECT $row FROM $table WHERE $option"; 
      }
      $data = mysql_query($sql);
      while($row = mysql_fetch_assoc($data)){
         $array[]= $row;
      }
      return $array;
    }
    
    function Insert($field=false,$row,$table,$value)
    {
       
    }         
}




//$connect = mysql_connect('localhost', 'root', '');
//mysql_select_db('school_db');
//
//if (!$connect)
//    echo 'Подключение к базе отсутствует';
?>