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
    
<<<<<<< HEAD
    function Select($table, $row="*", $option=false) {
=======
    function Select($table,$row="*",$option=false)
    {
>>>>>>> 555f2bdcafefd9a6f23b2acb3eee80ead6e60c29
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
    
<<<<<<< HEAD
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
=======
    function Insert($table,$row,$value) //Функция не "отрабатывает". Проверить синтаксис!  
    {
        $str_row = join(", ", $row);
        $str_value = join(", ", $value);
        $sql = "INSERT INTO $table ($str_row) VALUE ($str_value)";
        /*
        echo $sql.'<br>
        INSERT INTO `user`(`id`, `login`, `pass`, `name`, `surname`, `country`, `phone`, `email`, `adress`, `status`, `hash`) 
        VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])
        ';
        */
        $answer = mysql_query($sql);
        return $answer;
    } 
    
    function Update ($table,$row,$value,$option=FALSE)
    {
       if (is_string($row) && is_string($value))
       {
           $sql = "UPDATE $table SET $row = $value";
>>>>>>> 555f2bdcafefd9a6f23b2acb3eee80ead6e60c29
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
    
<<<<<<< HEAD
    function Delete($table, $option) {
       $sql = "DELETE FROM $table".$option;        
=======
    function Delete($table,$option){
       $sql = "DELETE FROM $table".$option;
        
>>>>>>> 555f2bdcafefd9a6f23b2acb3eee80ead6e60c29
       $answer = mysql_query($sql);
       
       return $answer;
    }
    
    function Where($row, $value, $action) {
        $option = '';
        
        if ($value)
            $option = " WHERE $row $action '$value'";
        
        return $option;
    }
    
<<<<<<< HEAD
    function Limit($count) {
=======
    function Limit ($position,$count)
    {
>>>>>>> 555f2bdcafefd9a6f23b2acb3eee80ead6e60c29
        $option = '';
        
        if(is_int($count))
<<<<<<< HEAD
            $option = " LIMIT 0, $count";
        
        return $option;
    }
}
?>
=======
        $option = "LIMIT $position,$count"; // Добавил переменную начальной позиции выборки
        return $option;
    }
}




//$connect = mysql_connect('localhost', 'root', '');
//mysql_select_db('school_db');
//
//if (!$connect)
//    echo 'Подключение к базе отсутствует';
>>>>>>> 555f2bdcafefd9a6f23b2acb3eee80ead6e60c29
