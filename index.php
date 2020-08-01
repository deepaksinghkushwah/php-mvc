<?php

// use autoloader
require "./config/params.php";

function autoload($class) {
    require LIBS . $class . ".php";
}

/*
  require "./libs/Bootstrap.php";
  require "./libs/Controller.php";
  require "./libs/View.php";
  require "./libs/Model.php";
  require "./libs/Session.php";
  require "./libs/RequestHelper.php";
  require "./libs/PasswordHelper.php";

  require "./libs/Form.php";
  
 */

spl_autoload_register('autoload');



$app = new Bootstrap();
