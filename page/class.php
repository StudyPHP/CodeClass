<?php
class Page extends Menu {
    public $type;
<<<<<<< HEAD
    public $data;
    
    public function __construct($type, $data) {
        parent::__construct();
        $this->type = $type;
        $this->data = $data;
    }
    
    function Show() {
        include 'personal/personal.php';
=======
    //public $data;
    
    public function __construct($type) {
        parent::__construct();
        $this->type = $type;
        //$this->data = $data;
    }
    function show() {
>>>>>>> 555f2bdcafefd9a6f23b2acb3eee80ead6e60c29
        include 'template/header.tpl';
        $file = $this->type."/".$this->type.'.php';
        include $file;
        include 'template/footer.tpl';
    }
}