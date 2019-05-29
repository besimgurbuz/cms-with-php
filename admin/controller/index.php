<?
$title = 'Home';

$query1 = $db->prepare('SELECT * FROM roles');
$query1->execute();
$roles = $query1->fetchAll(PDO::FETCH_ASSOC);


$query2 = $db->prepare('SELECT * FROM newsletter');
$query2->execute();
$newsletters = $query2->fetchAll(PDO::FETCH_ASSOC);


if(post('submit')){
    $role_name = post('role_name');
    if(!$role_name){
        $error = 'Please fill the role name entry.';
    }else{
        $query = $db->prepare('INSERT INTO roles SET role_name=?');
        $query->execute([$role_name]);
        $success = 'Role Added.';
        header('Location:'.admin_url('index'));
    }
}



require admin_view('index');