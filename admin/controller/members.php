<?php
$title = 'Members';

function social_url($row){
    $social_urls = json_decode($row['social_medias'],true);
    return $social_urls;
}

$query = $db->prepare('SELECT * FROM members');
$query->execute();
$rows = $query->fetchAll(PDO::FETCH_ASSOC);

require admin_view('members');