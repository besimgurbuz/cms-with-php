<?php
$title = 'Edit Partner';
$id = get('id');

$query = $db->prepare('SELECT * FROM partners WHERE partner_id=:id');
$query->execute([
    'id'=>$id
]);
$partner = $query->fetch(PDO::FETCH_ASSOC);

if(post('submit')){
    $partner_name = post('partner_name');
    $partner_url = post('partner_url');
    if(!$partner_name){
        $error = 'Please fill in partner name entry.';
    }elseif (!$partner_url){
        $error = 'Please fill in partner url entry.';
    }elseif(!isset($_FILES['partner_photo'])){
        $error = 'Please upload a partner photo.';
    }
    else{
        delete_photo(permalink($partner['partner_name']),'partners');
        $upload = upload_photo($_FILES['partner_photo'],permalink($partner_name),30,null,'partners');
        if(isset($upload['error'])){
            $error = $upload['error'];
        }else {
            //adding
            $query = $db->prepare('UPDATE partners SET partner_name=:name,partner_url=:url WHERE partner_id=:id');
            $result = $query->execute([
                'name'=>$partner_name,
                'url'=>$partner_url,
                'id' => $id
            ]);
            if (!$result) {
                $error = 'Partner cannot edited.';
            } else {
                $success = 'Partner edited.';
                header('Refresh:1;url=' . admin_url('partners'));
            }
        }
    }


}

require admin_view('edit-partner');