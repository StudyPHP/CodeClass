<?php
class DB {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "school_db";
    public $conn;
    
    public function __construct() {
       $this->conn = mysql_connect($this->host, $this->user, $this->pass);
       mysql_select_db($this->db_name);
    }
    
    function Select($table, $row="*", $option=false) {
      if(!$option){
         $sql = "SELECT $row FROM $table"; 
      }
      if($option){
         $sql = "SELECT $row FROM $table".$option;
      }
      $data = mysql_query($sql);
      while($row = mysql_fetch_assoc($data)){
         $array[]= $row;
      }
      return $array;
    }
    
    function Insert($table, $row, $value) {
       $str_row = join(", ", $row);
       $str_value = join(", ", $value);
       
       $sql = "INSERT INTO $table ($str_row) VALUE ($str_value)";
       $answer = mysql_query($sql);
       
       return $answer;
    }
    
    function Update($table, $row, $value, $option=FALSE) {
       if (is_string($row) && is_string($value)) {
           $sql = "UPDATE $table SET $row = '$value'";
       }
       if (is_array($row) && is_array($value)) {
           $sql = "UPDATE $table SET ";
           for ($i=0; $i < count($row); $i++) {
             $sql.="$row = '$value'".",";  
           }
           $sql = substr($sql, 0, strlen($sql)-1);
       }
       $answer = mysql_query($sql);
       
       return $answer;
    }
    
    function Delete($table, $option) {
       $sql = "DELETE FROM $table".$option;        
       $answer = mysql_query($sql);
       
       return $answer;
    }
    
    function Where($row, $value, $action) {
        $option = '';
        
        if ($value)
            $option = " WHERE $row $action '$value'";
        
        return $option;
    }
    
    function Limit($count) {
        $option = '';
        
        if(is_int($count))
            $option = " LIMIT 0, $count";
        
        return $option;
    }
}
?>