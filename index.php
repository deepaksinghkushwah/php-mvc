<?php
// use autoloader
require "./config/paths.php";
require "./config/database.php";


require "./libs/Bootstrap.php";
require "./libs/Controller.php";
require "./libs/View.php";
require "./libs/Model.php";
require "./libs/Session.php";
$app = new Bootstrap();
