<?php

$email = post('new_email');
$phone = post('new_phone');


if(!$email){
    $json['error'] = 'Please fill the email entry.';
}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $json['error'] = 'Please fill a valid email entry.';
}elseif(!$phone){
    $json['error'] = 'Please fill the phone entry.';
}
else{
    $query = $db->prepare('INSERT INTO newsletter SET newsletter_email=:email,newsletter_phone=:phone');
    $query->execute([
        'email'=>$email,
        'phone'=>$phone
    ]);
    if($query){
        $json['success'] = 'Your information has reached us. You will be added soon.';
    }else{
        $json['error'] = 'Your information could not be sent.';
    }
}