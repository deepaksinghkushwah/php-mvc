<?php

class User extends Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->view->title = "User - Index";
        $this->view->render("user/index");
    }
    
    function login(){
        require "models/login_model.php";
        $model = new Login_Model();
        $rows = $model->test();
        
        $this->view->title = "User - Login";
        $this->view->rows = $rows;
        $this->view->render("user/login");
    }
    
    function signup(){
        $this->view->title = "User - Signup";
        $this->view->render("user/signup"); // pass true with comma for empty page
    }
}
