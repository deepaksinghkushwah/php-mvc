<?php

class User extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = "User - Index";
        $model = new User_Model();
        $rows = $model->test();

        $this->view->rows = $rows;
        $this->view->render("user/index");
    }

    public function login() {

        $this->view->title = "User - Login";
        $this->view->css[] = SITE_URL . "public/css/style.css";
        $this->view->js[] = ['pos' => 'head', 'src' => 'https://cdn.jsdelivr.net/npm/vue@2.6.11'];

        if (isset($_POST['login'])) {
            $model = new User_Model();
            $username = RequestHelper::purify($_POST['username']);
            $password = RequestHelper::purify($_POST['password']);
            if ($model->login($username, $password)) {
                header('location: ' . SITE_URL . 'user/dashboard');
                exit;
            }
        }


        $model = new User_Model();
        $model->test();
        $this->view->render("user/login");
    }

    public function logout() {
        Session::destroy();
        header("location: " . SITE_URL . 'user/login');
        exit;
    }

    public function signup() {

        if (isset($_POST['register'])) {

            $model = new User_Model();
            $username = RequestHelper::purify($_POST['username']);
            $password = RequestHelper::purify($_POST['password']);
            $email = RequestHelper::purify($_POST['email']);
            if ($model->register($username, $password, $email)) {
                header('location: ' . SITE_URL . 'user/login');
                exit;
            }
        }
        $this->view->title = "User - Signup";
        $this->view->render("user/signup"); // pass true with comma for empty page
    }

    public function dashboard() {

        Session::checkAuthUsersOnly();
        $this->view->title = "User - Dashboard";
        $this->view->render("user/dashboard"); // pass true with comma for empty page
    }

    /**
     * Change password for logged in user
     */
    public function changePassword() {
        Session::checkAuthUsersOnly();
        
        if(isset($_POST['changePassword'])){
            $model = new User_Model();
            if($model->changePassword()){
                Session::addMessage("Password change successfully", "success");
                header("location: ".SITE_URL.'user/change-password');
                exit;
            } else {
                Session::addMessage("Error at changing password", "danger");
            }
        }
        
        $this->view->title = "Change Password";
        $this->view->render("user/change-password");
    }

    /**
     * Display/edit logged in user profile
     */
    public function profile() {
        Session::checkAuthUsersOnly();
        $this->view->title = "Profile";
        $this->view->render("user/profile");
    }

}
