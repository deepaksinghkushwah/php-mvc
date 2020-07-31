<?php

class Controller {
    public $view;
    function __call($name, $arguments) {
        $this->view->title = "Error - 404";
        $this->view->render("error/index");
    }

    function __construct() {        
        $this->view = new View();
    }

}
