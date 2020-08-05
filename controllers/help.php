<?php

class Help extends Controller {
    function __construct() {
        parent::__construct();        
    }
    
    public function index($args = false){
        $this->view->title = "Help";
        $model = new Help_Model();
        
        $this->view->msg = "Help/FAQ";
        $this->view->render("help/index");
    }
}
