<?php

class View {

    public $title;
    public $description;
    public $keywords;
    public $layout;

    function __construct() {
        // do nothing
        $this->layout = 'main';
    }

    /**
     * 
     * Render view/filename, do not enclose .php as it will be added automatically
     * @param type $name
     */
    public function render($name, $noInclude = false) {
        
        if ($noInclude == true) {
            require "views/" . $name . '.php';
        } else {
            require "views/layouts/header-{$this->layout}.php";
            require "views/" . $name . '.php';
            require "views/layouts/footer-{$this->layout}.php";            
        }        
        Session::removeFlashMessages();
    }

}
