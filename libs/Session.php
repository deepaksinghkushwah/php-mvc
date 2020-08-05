<?php

class Session {

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
    }

    public static function init() {
        @session_start();
    }

    public static function destroy() {
        session_destroy();
    }

    /**
     * Add flash message, add bootstrap alert class (success, info, danger, warning, primary etc) for category (cat)
     * @param string $msg Message
     * @param string $cat Category
     */
    public static function addMessage($msg, $cat = "info") {
        $_SESSION['flashMessage'][$cat][] = $msg;
    }

    public static function showFlashMessages() {
        if (isset($_SESSION['flashMessage']) && count($_SESSION['flashMessage']) > 0) {
            foreach ($_SESSION['flashMessage'] as $cat => $msg) {
                foreach ($msg as $m) {
                    echo "<div class='alert alert-" . $cat . "' role='alert'>
                        " . $m . "
                    </div>";
                }
            }
        }
    }

    public static function removeFlashMessages() {
        $_SESSION['flashMessage'] = [];
    }

    /**
     * Check if user is guest or logged in 
     * @return bool
     */
    public static function isGuest() {
        $loggedIn = self::get(KEY_LOGGED_IN);
        return $loggedIn == true;
    }

    public static function checkAuthUsersOnly() {
        if (!self::isGuest()) {
            self::addMessage("You are not authorized to perform this action");
            header('location: ' . SITE_URL . 'user/login');
            exit;
        }
    }

    public static function checkAdminUsersOnly() {
        if (self::get(KEY_LOGGED_IN) == true) {
            if (self::get(KEY_ROLE_ID) != 1) {
                self::addMessage("You are not authorized to perform this action");
                header('location: ' . SITE_URL . 'user/dashboard');
                exit;
            } 
        } else {            
            self::addMessage("You are not authorized to perform this action");
            header('location: ' . SITE_URL . 'user/login');
            exit;
        }
    }

}
