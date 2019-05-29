<?php
$title = 'Edit Admin';
$id = get('id');

$query = $db->prepare('SELECT * FROM admins WHERE admin_id=:id');
$query->execute([
    'id'=>$id
]);
$admin = $query->fetch(PDO::FETCH_ASSOC);

if(!$admin){
    $error = 'Admin not found';
    header('Refresh:1;url='.admin_url('users'));
}else {
    if(post('submit')) {
        $username = post('admin_username');
        $password = post('admin_pass');
        $password_verify = post('admin_pass_verify');
        if (!$username) {
            $error = 'Please fill in the username field.';
        } elseif (!$password) {
            $error = 'Please fill in the password field.';
        } elseif ($password != $password_verify) {
            $error = 'Your password has not been verified.';
        } else {
            $query2 = $db->prepare('UPDATE admins SET admin_username=:username,admin_password=:password WHERE admin_id=:id');
            $query2->execute([
                'username' => $username,
                'password' => $password,
                'id' => $id
            ]);
            $success = 'Admin edited.';
            header('Refresh:2;url='.admin_url('users'));
        }
    }
}

require admin_view('edit-user');