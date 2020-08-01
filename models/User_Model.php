<?php

class User_Model extends Model {

    public function test() {
        /*$this->insert("article", [
            'title' => 'My new article3',
            'content' => 'My new article content3',
            'description' => 'My new article content description',
            'url' => 'my-new-article',
            'keywords' => 'my new article',
        ]);
        
        $this->update("article", [
            'title' => 'My new article3',
            'content' => 'My new article content3',
            'description' => 'My new article content description',
            'url' => 'my-new-article',
            'keywords' => 'my new article',
        ],"id = 3");*/
        $records = $this->select("SELECT * FROM `article` WHERE id > :id",[':id' => 1]);
        return $records;
    }

    public function login($username, $password) {
        if (!empty($username) && !empty($password)) {
            $sql = "SELECT * FROM `user` WHERE username = :username";
            $stmt = $this->prepare($sql);
            $stmt->execute([':username' => $username]);
            $user = $stmt->fetchObject();
            if ($user) {
                $v = PasswordHelper::verify($password, $user->password);
                if ($v) {
                    Session::set(KEY_LOGGED_IN, true);
                    Session::set(KEY_USER_ID, $user->id);
                    Session::set(KEY_USER_NAME, $user->username);
                    Session::addMessage("Logged in successfully", "success");
                    return true;
                } else {
                    Session::addMessage("Invalid username or password", "danger");
                    return false;
                }
            } else {
                Session::addMessage("Username not found", "danger");
                return false;
            }
        }
    }

    public function register($username, $password, $email, $isAdmin = 0) {
        if (!empty($username) && !empty($password)) {
            $hashPassword = PasswordHelper::generate($password);
            $sql = "SELECT * FROM `user` WHERE username = :username";
            $stmt = $this->prepare($sql);
            $stmt->execute([':username' => $username]);
            $user = $stmt->fetchObject();
            if (!$user) {
                // register here
                $sql = "INSERT INTO `user` SET username = :username, password = :password, email = :email, is_admin = :isAdmin";
                $stmt = $this->prepare($sql);
                $res = $stmt->execute([':username' => $username, ':password' => $hashPassword, ':email' => $email, ':isAdmin' => $isAdmin]);
                if ($res) {
                    // user registered
                    Session::addMessage("User registered", "success");
                    return true;
                } else {
                    Session::addMessage("Error at user registration", "danger");
                    return false;
                }
            } else {
                // return error
                Session::addMessage("Username already registered, please choose another", "danger");
                return false;
            }
        } else {
            Session::addMessage("All fields are required", "warning");
            return false;
        }
    }

}
