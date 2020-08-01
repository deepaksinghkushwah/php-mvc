<?php

class View {
    
    
    function __construct() {
        // do nothing
    }

    /**
     * Render view/filename, do not enclose .php as it will be added automatically
     * @param type $name
     */
    public function render($name, $noInclude = false) {
        
        if ($noInclude == true) {
            require "views/" . $name . '.php';
        } else {
            require "views/header.php";
            require "views/" . $name . '.php';
            require "views/footer.php";
        }
    }

}
