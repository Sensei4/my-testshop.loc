<?php

if (PHP_MAJOR_VERSION < 8) {
    die('Необходима версия PHP >= 8');
}

require_once dirname(__DIR__) . '/config/init.php';

new \dz\App();

//echo \dz\App::$app->getProperty('pagination');
//\dz\App::$app->setProperty('test', 'TEST');
//var_dump(\dz\App::$app->getProperties());