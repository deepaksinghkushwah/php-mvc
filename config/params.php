<?php

define("SECRET", "oKnuy&g54E3#28i&*745jg0;bDFG1546");
define("DB_TYPE", "mysql");
define("DB_HOST", "127.0.0.1");
define("DB_NAME", "php-mvc");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DNS", DB_TYPE . ":dbname=" . DB_NAME . ";host=" . DB_HOST); //mysql:host=localhost;dbname=php-mvc
define('SITE_URL', 'http://php-mvc.local/');
define('SITE_ROOT', dirname(dirname(__FILE__)));

// session related, do not change
define("KEY_LOGGED_IN", "loggedIn");
define("KEY_ROLE_ID", "roleID");
define("KEY_USER_ID", "userID");
define("KEY_USER_NAME", "name");
define("CSRF_KEY","k8I8h%n89(k)mL;");
