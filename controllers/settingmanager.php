<?php
class SettingManager extends Controller {
    public function __construct() {
        parent::__construct();      
        Session::checkAdminUsersOnly();
    }
    
    public function index(){
        $this->view->layout = "admin";
        $this->view->title = "Setting Manager";
        $this->view->render("settingmanager/index");
    }
}
