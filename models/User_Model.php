<?php

class User_Model extends Model {

    public function listAll() {
        $rows = $this->select("SELECT * FROM `user`");
        return $rows;
    }

    public function get($id) {
        $rows = $this->select("SELECT * FROM `user` WHERE id = :id", [':id' => $id]);
        return isset($rows) ? $rows[0] : false;
    }

    public function test() {
        /* $this->insert("article", [
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
          ],"id = 3"); */
        $records = $this->select("SELECT * FROM `article` WHERE id > :id", [':id' => 1]);
        return $records;
    }

    public function login($username, $password) {
        if (!empty($username) && !empty($password)) {
            $sql = "SELECT * FROM `user` WHERE username = :username AND `status` = 1";
            $stmt = $this->prepare($sql);
            $stmt->execute([':username' => $username]);
            $user = $stmt->fetchObject();
            if ($user) {
                $v = PasswordHelper::verify($password, $user->password);
                if ($v) {
                    Session::set(KEY_LOGGED_IN, true);
                    Session::set(KEY_USER_ID, $user->id);
                    Session::set(KEY_USER_NAME, $user->username);
                    Session::set(KEY_ROLE_ID, $user->role_id); // 1 = admin, 0 = normal user
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

    public function register($username, $password, $email, $role = 2) {
        if (!empty($username) && !empty($password)) {
            $hashPassword = PasswordHelper::generate($password);
            $sql = "SELECT * FROM `user` WHERE username = :username";
            $stmt = $this->prepare($sql);
            $stmt->execute([':username' => $username]);
            $user = $stmt->fetchObject();
            if (!$user) {
                // register here
                $sql = "INSERT INTO `user` SET `username` = :username, `password` = :password, `email` = :email, `role_id` = :role, `status` = :status";
                $stmt = $this->prepare($sql);
                $res = $stmt->execute([':username' => $username, ':password' => $hashPassword, ':email' => $email, ':role' => $role, ':status' => 1]);
                if ($res) {
                    // user registered
                    Session::addMessage("User registered", "success");
                    return true;
                } else {
                    //exit($stmt->queryString);
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

    public function adminUpdate($id) {
        $form = new Form();
        $form->post("username")->validate("minLength", 4)
                ->post("email")->validate("email")
                ->post("role_id")->validate("integer")
                ->post("status")->validate("integer");

        if (count($form->_error) <= 0) {
            $sql = "SELECT * FROM `user` WHERE username = :username AND email = :email AND id != :id";
            $stmt = $this->prepare($sql);
            $stmt->execute([':username' => $form->fetch("username"), ":id" => $id, ":email" => $form->fetch("email")]);
            $user = $stmt->fetchObject();
            if (!$user) {
                // no use found with same user name,update new details
                $res = $this->update("user", [
                    'username' => $form->fetch("username"),
                    'email' => $form->fetch("email"),
                    'role_id' => $form->fetch("role_id"),
                    'status' => $form->fetch("status"),
                        ], "id = $id");
                if ($res) {
                    Session::addMessage("User updated", "success");
                } else {
                    Session::addMessage("Error at updating user", "danger");
                }
                return $res;
            } else {
                Session::addMessage("Username or email alredy used", "warning");
                return false;
            }
        }
    }

}
