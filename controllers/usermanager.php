<?php
class UserManager extends Controller {
    public function __construct() {
        parent::__construct();        
    }
    
    public function index(){
        $this->view->title = "User Manager";
        $this->view->render("usermanager/index",true, false);
    }
}
