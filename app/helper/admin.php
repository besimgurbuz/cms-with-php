<?php

function admin_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH.'/admin/controller/'.$controllerName.'.php';
}

function admin_view($viewName){
    $viewName = strtolower($viewName);
    return PATH.'/admin/view/'.$viewName.'.php';
}
function admin_url($url = false){
    return URL.'/admin/'.$url;
}
function admin_public_url($url = false){
    return URL.'/admin/public/'.$url;
}
function upload_photo($file,$name,$MByte=1,$file_format=null,$path){
    $result = [];
    if($file['error'] == 4){
        $result['error'] = 'Please upload a member photo.';
    }else{
        if(is_uploaded_file($file['tmp_name'])){
            $supported_types = $file_format ? $file_format:[
                'image/jpeg',
                'image/png',
            ];
            $extension = explode('.',$file['name']);
            $extension = $extension[1];
            $maks_size = (1024*1024) * $MByte;
            $file_extension = $file['type'];
            if(in_array($file_extension,$supported_types)){
                if($maks_size >= $file['size']){
                    $photo_name = $path.'_'.$name;
                    $upload = move_uploaded_file($file['tmp_name'],dirname(getcwd()).'/containment/public/assets/'.$path.'/'.$photo_name.'.'.$extension);
                    if($upload){
                        $result['file'] = dirname(getcwd()).'/containment/public/assets/'.$path.'/'.$photo_name.'.'.$extension;
                    }else{
                        $result['error'] = 'Photo cannot uploaded.'.$file['error'];
                    }
                }else{
                    $result['error'] = 'The size of your photo too much.';
                }
            }else{
                $result['error'] = 'The format of your photo can be jpeg or png.';
            }
        }else{
            $result['error'] = 'There was a problem loading the file..';
        }
    }
    return $result;
}

function delete_photo($name,$path){
    $photos = glob('public/assets/'.$path.'/*');

    foreach ($photos as $photo){
        $p_name = basename($photo);
        $p_name = explode('.',$p_name);
        $p_name = $p_name[0];
        if($path.'_'.$name==$p_name){
            unlink($photo);
        }
    }
}
