<?php
$title = 'Edit Partner';

if(post('submit')){
    $partner_name = post('partner_name');
    $partner_url = post('partner_url');
    if(!$partner_name){
        $error = 'Please fill in partner name entry.';
    }elseif(!$partner_url){
        $error = 'Please fill in partner url entry.';
    }elseif(!isset($_FILES['partner_photo'])){
        $error = 'Please upload a partner photo.';
    }else{
        $upload = upload_photo($_FILES['partner_photo'],permalink($partner_name),30,null,'partners');
        if(isset($upload['error'])){
            $error = $upload['error'];
        }else {
            //adding
            $query = $db->prepare('INSERT INTO partners SET partner_name=:name,partner_url=:url');
            $result = $query->execute([
                'name' => $partner_name,
                'url'=>$partner_url
            ]);
            if (!$result) {
                $error = 'Partner cannot adding.';
            } else {
                $success = 'Partner added.';
                header('Refresh:1;url=' . admin_url('partners'));
            }
        }
    }


}


require admin_view('add-partner');