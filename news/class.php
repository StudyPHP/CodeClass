<?php
class News extends Page {
    //public $data;
    
    public function __construct() {
        //parent::__construct($this->type, $this->data);
    }
    
    function Show() {
        $option = '';
        if ($this->type == 'New')
            $option = parent::Where('id', $_GET['id'], '=');
        
        $this->data = parent::Select('news', '*', $option);
    }
}