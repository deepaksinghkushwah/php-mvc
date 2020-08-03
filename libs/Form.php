<?php

require "Form/Validation.php";

class Form {

    /** @var array Posted Data */
    private $_postData = [];

    /**
     *
     * @var immidiate posted data 
     */
    private $_currentItem = null;
    private $_val = [];
    public $_error = [];

    public function __construct() {

        $this->_val = new Validation();
    }

    /**
     * Set postedData array
     * @param string $field Field name
     */
    public function post($field) {
        $this->_postData[$field] = $_POST[$field];
        $this->_currentItem = $field;
        return $this;
    }

    /**
     * Fetch return posted data
     * @param string $field
     * @return mixed string or array
     */
    public function fetch($field = false) {
        if ($field) {
            return $this->_postData[$field];
        } else {
            return $this->_postData;
        }
    }

    /**
     * Validate posted vars
     * @param string $typeOfValidation Name of validation
     * @param string $arg A property to validate
     * @return $this
     */
    public function validate($typeOfValidation, $arg = null) {
        if ($arg == null) {
            $error = $this->_val->{$typeOfValidation}($this->_postData[$this->_currentItem]);
        } else {
            $error = $this->_val->{$typeOfValidation}($this->_postData[$this->_currentItem], $arg);
        }
        if ($error) {
            $this->_error[$this->_currentItem] = $error;
        }
        //echo "<pre>";print_r($this->_error);echo "</pre>";
        return $this;
    }

    public static function generateToken($formName) {
        $secretKey = CSRF_KEY;
        if (!session_id()) {
            session_start();
        }
        $sessionId = session_id();

        return sha1($formName . $sessionId . $secretKey);
    }

    public static function addCsrfToken($formName) {
        return '<input type="hidden" name="csrf_token" value="' . self::generateToken($formName) . '"/>';
    }

    public static function checkToken($token, $formName) {
        return $token === self::generateToken($formName);
    }

}
