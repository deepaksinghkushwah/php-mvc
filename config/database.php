<?php
define("DB_TYPE","mysql");
define("DB_HOST","127.0.0.1");
define("DB_NAME","php-mvc");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DNS",DB_TYPE.":dbname=".DB_NAME.";host=".DB_HOST);//mysql:host=localhost;dbname=php-mvc