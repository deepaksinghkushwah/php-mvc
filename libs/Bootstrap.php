<?php

class Bootstrap {

    function __construct() {
        /**
         * $url[0] = controller
         * $url[1] = action
         * $url[x] = params
         */
        Session::init();
        $baseUrl = isset($_GET['url']) ? $_GET['url'] : 'index';
        $baseUrl = filter_var($baseUrl, FILTER_SANITIZE_URL);
        $url = explode("/", rtrim($baseUrl, "/"));


        $file = "controllers/" . $url[0] . ".php";
        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/customerror.php';
            $c = new CustomError();
            $c->title = "Error";
            $c->index();
            return false;
        }
        $c = new $url[0];

        // capitalize chars with hypen
        if (isset($url[1])) {
            $x = explode("-", $url[1]);
            $s = "";

            if (count($x) > 0) {
                $z = 0;
                foreach ($x as $y) {
                    if ($z != 0) {
                        $s .= ucfirst($y);
                    } else {
                        $s .= $y;
                    }
                    $z++;
                }
                $url[1] = $s;
            }
        }
        // capitalization end here



        if (isset($url[2])) {
            $slice = array_slice($url, 2);
            $c->{$url[1]}($slice);
        } else {
            // controller function
            if (isset($url[1])) {
                $c->{$url[1]}();
            } else {
                $c->index();
            }
        }
    }

}
