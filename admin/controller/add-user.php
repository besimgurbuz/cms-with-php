<?php
$title = 'Add Admin';
if(post('submit')){
    $username = post('admin_username');
    $password = post('admin_pass');
    $password_verify = post('admin_pass_verify');
    if(!$username){
        $error = 'Please fill in the username field.';
    }elseif(!$password){
        $error = 'Please fill in the password field.';
    }elseif ($password != $password_verify){
        $error = 'Your password has not been verified.';
    }else{
        if(strlen($password) < 8){
            $error = 'Your password must be more than 8 characters';
        }else{
            $query = $db->prepare('INSERT INTO admins SET admin_username=:username,admin_password=:password');
            $query->execute([
                'username'=>$username,
                'password'=>$password
            ]);
            $success = 'Admin created.';
            header('Refresh:2;url='.admin_url('users'));
        }
    }
}



require admin_view('add-user');