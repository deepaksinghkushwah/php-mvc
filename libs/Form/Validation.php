<?php

class Validation {
    public function __construct() {
        
    }
    
    public function minLength($data, $arg){
        if(strlen($data) < $arg){
            return "Your string can only be $arg long";
        }
    }
    
    public function maxLength($data, $arg){
        if(strlen($data) > $arg){
            return "Your string can only be $arg long";
        }
    }
    
    public function integer($data){
        if(!ctype_digit($data)){
            return "Your string must be a digit";
        }
    }
    
    public function __call($name, $arguments) {
        return "$name validation does not exists";
    }
}

