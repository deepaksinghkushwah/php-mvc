<?php

class Index extends Controller {
    function __construct() {
        parent::__construct();              
    }
    
    public function index($args = false){
        $this->view->title = "Home";
        $this->view->layout = "home";
        $this->view->render("index/index");    
    }
    
    public function other($args = false){
        $this->view->title = "Home - Other";
        $this->view->args = $args;
        $this->view->render("index/other");        
    }
    
    public function about($args = false){
        $this->view->title = "About Us";
        $this->view->render("index/about");    
    }
}
