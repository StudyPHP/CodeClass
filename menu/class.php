<?php
class Menu extends DB {
    public $data;
    
    public function __construct() {
        parent::__construct();
        //$this->Show();
    }
    function Show()
    {
        $this->data = parent::Select('menu');
    }
}


