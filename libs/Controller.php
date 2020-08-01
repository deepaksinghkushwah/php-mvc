<?php

class Controller {
    public $view;
    
    /**
     * This will return error if action not defined in any controller
     * @param type $name Action name
     * @param type $arguments Arguments passed with action
     */
    function __call($name, $arguments) {
        $this->view->title = "Error - 404";
        $this->view->render("error/index");
    }

    function __construct() {        
        $this->view = new View();
    }

}
