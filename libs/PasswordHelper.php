<?php

class PasswordHelper {

    public static function generate($plainPassword) {
        return password_hash($plainPassword, PASSWORD_DEFAULT, ['cost' => 10]);        
    }

    public static function verify($plainPassword, $hash) {
        return password_verify($plainPassword, $hash);
        
    }

}
