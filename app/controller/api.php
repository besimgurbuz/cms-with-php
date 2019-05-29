<?php

$json = [];
$type = route(1);
if(!$type){
    exit;
}

if (file_exists(controller('api/'.$type))){
    require controller('api/'.$type);
}
echo json_encode($json);