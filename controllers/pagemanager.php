<?php
class PageManager extends Controller {
    public function __construct() {
        parent::__construct();        
    }
    
    public function index(){
        $this->view->title = "Page Manager";
        $this->view->render("pagemanager/index",true, false);
    }
}
