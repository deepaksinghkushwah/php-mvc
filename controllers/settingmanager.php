<?php
class SettingManager extends Controller {
    public function __construct() {
        parent::__construct();        
    }
    
    public function index(){
        $this->view->title = "Setting Manager";
        $this->view->render("settingmanager/index",true, false);
    }
}
