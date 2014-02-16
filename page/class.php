<?php
class Page extends Menu {
    public $type;
    public $array;
    
    public function __construct($type) {
        parent::__construct();
        $this->type = $type;
    }
    function show() {
        include 'template/header.tpl';
        switch ($this->type) {
            case 'front':
               echo 'Front Page';
               break;
            default:
               echo '404 Page Not found';
               break;
        }
        include 'template/footer.tpl';
    }
}