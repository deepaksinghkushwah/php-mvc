<?php

class Validation {

    public function __construct() {
        
    }

    public function minLength($data, $arg) {
        if (strlen($data) < $arg) {
            return "Minimum length should be $arg long";
        }
    }

    public function maxLength($data, $arg) {
        if (strlen($data) > $arg) {
            return "Maximum length should be $arg long";
        }
    }

    public function integer($data) {
        if (!ctype_digit($data)) {
            return "Must be a digit";
        }
    }

    public function __call($name, $arguments) {
        return "Validation does not exists";
    }

    public function email($data) {
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return "Enter valid email";
        }
    }

}
