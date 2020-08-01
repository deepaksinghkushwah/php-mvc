<?php
/**
 * @var $this->view View
 */
class Article extends Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        
        $rows = (new Article_Model)->listAll();
        $this->view->rows = $rows;
        $this->view->title = "Articles";
        $this->view->render("article/index");
    }
}
