<?php
class Admin extends Controller{
    public function __construct() {
        parent::__construct();
        Session::checkAdminUsersOnly();
        $this->view->layout = "admin";
    }
    
    public function dashboard(){
        $this->view->title = "Admin Dashboard";
        
        $this->view->render("admin/dashboard");
    }
}
