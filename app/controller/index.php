<?php
function social_url($row){
    $social_urls = json_decode($row['social_medias'],true);
    return $social_urls;
}
function social_name($url){
    $target = explode('.',$url);
    $target = $target[1];
    return $target;
}
function date_fixer($date){
    $date = explode(' ',$date);
    $date = $date[0];
    return $date;
}
$query = $db->prepare('SELECT * FROM members');
$query->execute();
$rows = $query->fetchAll(PDO::FETCH_ASSOC);


$query1 = $db->prepare('SELECT * FROM roles');
$query1->execute();
$roles = $query1->fetchAll(PDO::FETCH_ASSOC);

$query2 = $db->prepare('SELECT * FROM partners');
$query2->execute();
$partners = $query2->fetchAll(PDO::FETCH_ASSOC);

function blob_image($data,$type){
    header('Content-type:'.$type);
    echo base64_decode($data);
}

require view('index');