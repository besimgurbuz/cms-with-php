<?php
$title = 'Add Member';

if(post('submit')){
    $member_name = post('member_name');
    $member_mail = post('member_mail');
    $member_desc = post('member_desc');
    $member_social = post('member_social');

    if(!$member_name){
        $error = 'Please fill in name entry.';
    }elseif(!$member_mail){
        $error = 'Please fill in e-mail entry.';
    }elseif(!filter_var($member_mail,FILTER_VALIDATE_EMAIL)){
        $error = 'Please type a valid e-mail.';
    }elseif(!$member_desc){
        $error = 'Please fill in description entry.';
    }elseif(!isset($_FILES['member_photo'])){
        $error = 'Please upload a member photo.';
    }
    else{

        $upload = upload_photo($_FILES['member_photo'],permalink($member_name),30,null,'members');
        if(isset($upload['error'])){
            $error = $upload['error'];
        }else {
            if ($member_social) {
                $member_social = explode(',', $member_social);
            }
            //adding
            $query = $db->prepare('INSERT INTO members SET name=:name,mail=:mail,description=:description,social_medias=:medias');
            $result = $query->execute([
                'name' => $member_name,
                'mail' => $member_mail,
                'description' => $member_desc,
                'medias' => json_encode($member_social)
            ]);
            if (!$result) {
                $error = 'Member cannot adding.';
            } else {
                $success = 'Member added.';
                header('Refresh:1;url=' . admin_url('members'));
            }
        }
    }


}


require admin_view('add-member');