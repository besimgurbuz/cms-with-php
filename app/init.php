<?php

session_start();
ob_start();
function loadClasses($className){
    require __DIR__.'/classes/'.strtolower($className).'.php';
}

spl_autoload_register('loadClasses');

$config = require __DIR__.'/config.php';

try{
$db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'],$config['db']['user'],$config['db']['password']);
}catch (PDOException $e){
    die($e->getMessage());
}
require __DIR__.'/settings.php';

foreach (glob(__DIR__.'/helper/*.php') as $helperFile){
    require $helperFile;
}
