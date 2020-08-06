<?php
require "./config/params.php";
require "./vendor/autoload.php";

// use autoloader
function autoload($class) {
    $folders = ['libs', 'controllers', 'models','libs/Form/'];
    foreach($folders as $folder){
        $path = SITE_ROOT.'/'.$folder.'/'.$class.".php";
        if(file_exists($path)){
            require $path;
        }
    }
    
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
