<?php
$title = 'Edit Member';
$id = get('id');
function social_url($row){
    $social_urls = json_decode($row['social_medias'],true);
    return $social_urls;
}

$query = $db->prepare('SELECT * FROM members WHERE id=:id');
$query->execute([
    'id'=>$id
]);
$member = $query->fetch(PDO::FETCH_ASSOC);

if(!empty(social_url($member))) {
    $media_links = json_decode($member['social_medias'],true);
    $media_string = implode(',',$media_links);
}else{
    $media_string = '';
}

if(!$member){
    $error = 'Member not found';
    header('Refresh:1;url='.admin_url('users'));
}else {
    if(post('submit')) {
        $member_name = post('member_name');
        $member_mail = post('member_mail');
        $member_desc = post('member_desc');
        $member_social = post('member_social');

        if(!$member_name){
            $error = 'Please fill in name entry.';
        }elseif(!$member_mail){
            $error = 'Please fill in email entry.';
        }elseif(!$member_desc){
            $error = 'Please fill in description entry.';
        }else {
            if ($member_social) {
                $member_social = explode(',', $member_social);
            }
            if(isset($_FILES['member_photo'])){
                delete_photo(permalink($member['name']),'member');
                $upload = upload_photo($_FILES['member_photo'],permalink($member_name),30,null,'members');
                if(isset($upload['error'])){
                    $error = $upload['error'];
                }else {
                    $query2 = $db->prepare('UPDATE members SET name=:name,mail=:mail,description=:description,social_medias=:medias WHERE id=:id');
                    $result = $query2->execute([
                        'name' => $member_name,
                        'mail' => $member_mail,
                        'description' => $member_desc,
                        'medias' => json_encode($member_social),
                        'id' => $id
                    ]);
                    if ($result) {
                        $success = 'Member edited.';
                        header('Refresh:2;url=' . admin_url('members'));
                    } else {
                        $error = 'Member cannot edited.';
                    }
                }
            }
            else{
                $error = 'Please upload a photo.';
            }
        }
    }
}

require admin_view('edit-member');