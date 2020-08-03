<?php

class UserManager extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->layout = "admin";
    }

    public function index() {
        $this->view->title = "User Manager";
        $model = new User_Model();
        $this->view->rows = $model->listAll();
        $this->view->render("usermanager/index");
    }

    public function create() {
        $this->view->title = "Create new User";


        if (isset($_POST['saveUser'])) {
            $form = new Form();
            $form->post("username")->validate("minLength", 4)
                    ->post("email")->validate("minLength", 5)
                    ->post("password")->validate("minLength", 5)
                    ->post("role_id")->validate("integer");
            if (count($form->_error) <= 0) {
                $model = new User_Model();
                if ($model->register($form->fetch("username"),$form->fetch("password"),$form->fetch("email"), $form->fetch("role_id"))) {
                    Session::addMessage("User saved", "success");
                    header('location: ' . SITE_URL . 'usermanager/index');
                    exit;
                }
            } else {
                foreach($form->_error as $key => $error){
                    Session::addMessage($key." - ".$error, "danger");                    
                }
            }
        }

        $this->view->render("usermanager/create");
    }

    public function update($args) {
        $model = new User_Model();

        if (isset($_POST['saveUser'])) {            
            
            if ($model->adminUpdate($args[0])) {                
                header('location: ' . SITE_URL . 'usermanager/index');
                exit;
            }
        }


        $formData = $model->get($args[0]);
        $this->view->formData = $formData;
        $this->view->title = "Update user";

        $this->view->render("usermanager/update");
    }

    public function delete($args) {
        $model = new Article_Model();
        if ($model->update("user", ["status" => 2], "id = " . $args[0])) {
            echo json_encode(['msg' => 'User Deleted']);
        } else {
            echo json_encode(['msg' => 'Error at deleting user']);
        }
        exit;
    }

}
