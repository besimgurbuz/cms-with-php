<?php

$name = post('name');
$email = post('email');
$subject = post('subject');
$message = post('message');


if(!$name){
    $json['error'] = 'Please fill the name entry.';
}elseif(!$email){
    $json['error'] = 'Please fill the email entry.';
}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $json['error'] = 'Please fill a valid email.';
}elseif (!$subject){
    $json['error'] = 'Please fill the subject entry.';
}elseif (!$message){
    $json['error'] = 'Please fill the message entry.';
}else{
    $query = $db->prepare('INSERT INTO contact SET contact_name=:name,contact_email=:email,contact_subject=:subject,contact_message=:message');
    $query->execute([
        'name'=>$name,
        'email'=>$email,
        'subject'=>$subject,
        'message'=>$message,
    ]);
    if($query){
        $json['success'] = 'Your message has reached us. Thanks.';
    }else{
        $json['error'] = 'Your message could not be sent.';
    }
}