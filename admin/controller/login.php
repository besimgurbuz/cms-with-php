<?php
$title = 'Login';

if(post('submit')){
    $username = post('admin_username');
    $password = post('admin_password');
    if (!$username) {
        $error = 'Please fill in the username field.';
    } elseif (!$password) {
        $error = 'Please fill in the password field.';
    }else {
        $query = $db->prepare('SELECT * FROM admins WHERE admin_username=:username');
        $query->execute([
            'username'=>$username
        ]);
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if(!$row){
            $error = 'Admin does not found.';
        }else{
            if($password == $row['admin_password']){
                $success = 'Welcome '.$row['admin_username'];
                $_SESSION['admin_login'] = true;
                header('Refresh:0;url='.admin_url());
            }else{
                $error = 'Password wrong.';
            }
        }
    }
}

require admin_view('login');