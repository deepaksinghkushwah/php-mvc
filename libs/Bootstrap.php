<?php

class Bootstrap {

    function __construct() {
        Session::init();
        $baseUrl = isset($_GET['url']) ? $_GET['url'] : 'index';
        $url = explode("/", rtrim($baseUrl, "/"));
        
        
        $file =  "controllers/" . $url[0] . ".php";
        if(file_exists($file)){
            require $file;
        } else {
            //exit("here");
            $c = new controllers\CustomError();
            $c->title = "Error";
            $c->index();
            return false;
        }
        $c = new $url[0];

        if (isset($url[2])) {
            $slice = array_slice($url, 2);
            $c->{$url[1]}($slice);
        } else {
            // controller function
            if(isset($url[1])){
                $c->{$url[1]}();
            } else {
                $c->index();
            }
        }
    }

}