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
    
    public function detail($args){
        $model = new Article_Model();
        $article = $model->get($args[0])[0];// $args[0] hold the article id
        
        $this->view->article = $article;
        $this->view->title = $article['title'];
        $this->view->keywords = $article['keywords'];
        $this->view->description = $article['description'];
        $this->view->render("article/detail");
    }
}
