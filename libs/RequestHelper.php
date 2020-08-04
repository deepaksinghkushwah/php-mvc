<?php

class RequestHelper {

    public static function purify($var, $extraCharToRemove = []) {
        $pattern = array_merge(['\'', '"', ',', ';', '<', '>'], $extraCharToRemove);
        $var = str_replace($pattern, '', $var);
        $var = filter_var($var, FILTER_SANITIZE_STRING);
        return $var;
    }

}
