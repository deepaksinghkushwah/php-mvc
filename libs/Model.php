<?php

class Model extends PDO {    
    function __construct() {
        parent::__construct(DNS, DB_USER, DB_PASSWORD);
        
    }

}
