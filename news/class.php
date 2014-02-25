<?php
class News extends DB {
    public $data;
    
    public function __construct() {
        parent::__construct();
    }
    
    function Show() {
        $option = '';
        if (isset($_GET['id']))
            $option = parent::Where('id', $_GET['id'], '=');
        
        $this->data = parent::Select('news', '*', $option);
    }
}