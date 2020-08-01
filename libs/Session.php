<?php

class Session {

    private static $flashMessage = [];

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
    }

    public static function init() {
        session_start();
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
        self::$flashMessage [$cat][] = $msg;
    }

    public static function showFlashMessages() {
        if (count(self::$flashMessage) > 0) {
            foreach (self::$flashMessage as $cat => $msg) {
                foreach ($msg as $m) {
                    echo "<div class='alert alert-" . $cat . "' role='alert'>
                        " . $m . "
                    </div>";
                }
            }
        }
        self::$flashMessage = [];
    }
    
    /**
     * Check if user is guest or logged in 
     * @return bool
     */
    public static function isGuest(){
        $loggedIn = self::get(KEY_LOGGED_IN);
        return  $loggedIn == true;
    }

}
