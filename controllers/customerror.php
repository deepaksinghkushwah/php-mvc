<?php
namespace controllers;
class CustomError extends Controller {
    function __construct() {
        parent::__construct();                
    }
    
    public function index(){
        $this->view->render("error/index");
    }
}
