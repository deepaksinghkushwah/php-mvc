<?php

class PageManager extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->layout = "admin"; // the default layout for whole controller
    }

    public function index($args = false) {
        $this->view->title = "Page Manager";
        $this->view->args = $args;
        $model = new Article_Model();
        $this->view->rows = $model->listAll();
        $this->view->render("pagemanager/index");
    }

    public function create() {
        $this->view->title = "Create new page/article";
        
        
        if (isset($_POST['savePage'])) {
            $model = new Article_Model();
            if ($model->save()) {
                Session::addMessage("Page/article saved", "success"); 
                header('location: '.SITE_URL.'pagemanager/index');
                exit;
            }
        }

        $this->view->render("pagemanager/create");
    }

    public function update($args) {
        $model = new Article_Model();

        if (isset($_POST['savePage'])) {
            if ($model->save($args[0])) {
                Session::addMessage("Page/article saved", "success");
                header('location: '.SITE_URL.'pagemanager/index');                
                exit;
            } else {
                Session::addMessage("Error at saving page/article", "danger");
            }
        }
        

        $formData = $model->getByID($args[0])[0];
        $this->view->formData = $formData;
        $this->view->title = "Update page/article";
        
        $this->view->render("pagemanager/update");        
    }

    public function delete($args) {
        $model = new Article_Model();
        if ($model->delete("article", "id = " . $args[0])) {
            echo json_encode(['msg' => 'Article Deleted']);
        } else {
            echo json_encode(['msg' => 'Error at deleting article']);
        }
        exit;
    }

}
