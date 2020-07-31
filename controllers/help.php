<?php

class Help extends Controller {
    function __construct() {
        parent::__construct();        
    }
    
    public function index($args = false){
        $this->view->title = "Help";
        require "models/help_model.php";
        $model = new Help_Model();
        
        $this->view->msg = "This is sample msg<br>";
        $this->view->render("help/index");
    }
}
