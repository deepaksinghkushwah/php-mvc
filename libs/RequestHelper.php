<?php

class RequestHelper {

    public static function purify($var) {
        $var = str_replace(array('\'', '"', ',', ';', '<', '>'), '', $var);        
        $var = filter_var($var, FILTER_SANITIZE_STRING);
        return $var;
    }

}
