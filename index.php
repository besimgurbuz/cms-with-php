<?php

require __DIR__.'/app/init.php';

$routeExplode = explode('?',$_SERVER['REQUEST_URI']);
$route = array_filter(explode('/',$routeExplode[0]));

if(SUBFOLDER === true){
    array_shift($route);
}

if (!route(0)){
    $route[0] = 'index';
}

if(!file_exists(controller($route[0]))){
    $route[0] = '404';
}
if(setting('maintenance')==1 && route(0) != 'admin'){
    $route[0] = 'maintenance';
}

require controller(route(0));