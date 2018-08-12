<?php

define('APPLICATION_PATH', dirname(__FILE__));
define('BASE_URL',"http://dev.blog.local/");
define('CACHE_TIME', 3600);
define('IP',"123.57.52.70");
define('STATIC_PUBLIC', "http://dev.blog.local/");
$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();

