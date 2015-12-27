<?php
define("APP_PATH",  dirname(__FILE__));

/*
$config = array(
   "application" => array(
       "directory" => APP_PATH . "/application",
    ),
);

$app  = new yaf_application($config);
*/

$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");

$app->bootstrap() //call bootstrap methods defined in Bootstrap.php
    ->run();