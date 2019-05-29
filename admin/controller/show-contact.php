<?php
$id = get('id');

$query = $db->prepare('SELECT * FROM contact WHERE contact_id=:id');
$query->execute([
    'id'=>$id
]);
$row = $query->fetch(PDO::FETCH_ASSOC);
$title = 'Contact Message';

if($row['contact_read']==0){
    $query = $db->prepare('UPDATE contact SET contact_read=? WHERE contact_id=?');
    $query->execute([1,$id]);
}

require admin_view('show-contact');