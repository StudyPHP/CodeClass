<?php
class Page extends Menu {
    public $type;
    public $data;
    
    public function __construct($type, $data) {
        parent::__construct();
        $this->type = $type;
        $this->data = $data;
    }
    
    function Show() {
        include 'personal/personal.php';
        include 'template/header.tpl';
        $file = $this->type."/".$this->type.'.php';
        include $file;
        include 'template/footer.tpl';
    }
}