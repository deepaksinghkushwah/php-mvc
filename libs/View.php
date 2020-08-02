<?php

class View {

    public $title;

    function __construct() {
        // do nothing
    }

    /**
     * Render view/filename, do not enclose .php as it will be added automatically
     * @param type $name
     */
    public function render($name, $renderAdminTemplte = false, $noInclude = false) {

        if ($noInclude == true) {
            require "views/" . $name . '.php';
        } else {
            if ($renderAdminTemplte == true) {
                require "views/header-admin.php";
                require "views/" . $name . '.php';
                require "views/footer-admin.php";
            } else {
                require "views/header.php";
                require "views/" . $name . '.php';
                require "views/footer.php";
            }
        }
    }

}
