<?php
$target = get('target');
$id = get('id');

switch ($target) {
    case 'role':
        $query = $db->prepare('DELETE FROM roles WHERE role_id=?');
        $query->execute([$id]);
        header('Location:'.admin_url('index'));
        break;

    case 'member':
        $selc = $db->prepare('SELECT * FROM members WHERE id=?');
        $selc->execute([$id]);
        $selected = $selc->fetch(PDO::FETCH_ASSOC);

        delete_photo(permalink($selected['name']),'member');


        $query = $db->prepare('DELETE FROM members WHERE id=:id');
        $query->execute([
            'id'=>$id
        ]);

        header('Location:'.admin_url('members'));
        break;
    case 'user':
        $query = $db->prepare('DELETE FROM admins WHERE admin_id=:id');
        $query->execute([
            'id'=>$id
        ]);
        header('Location:'.admin_url('users'));
        break;
    case 'contact':
        $query = $db->prepare('DELETE FROM contact WHERE contact_id=:id');
        $query->execute([
            'id'=>$id
        ]);
        header('Location:'.admin_url('contact'));
        break;
    case 'partner':
        $selc = $db->prepare('SELECT * FROM partners WHERE partner_id=?');
        $selc->execute([$id]);
        $selected = $selc->fetch(PDO::FETCH_ASSOC);

        delete_photo(permalink($selected['partner_name']),'partners');

        $query = $db->prepare('DELETE FROM partners WHERE partner_id=:id');
        $query->execute([
            'id'=>$id
        ]);

        header('Location:'.admin_url('partners'));
        break;
    case 'newsletter':
        $query = $db->prepare('DELETE FROM newsletter WHERE newsletter_id=:id');
        $query->execute([
            'id'=>$id
        ]);
        header('Location:'.admin_url('index'));
        break;
}
/*
if($target == 'role'){
    $query = $db->prepare('DELETE FROM roles WHERE role_id=?');
    $query->execute([$id]);
    header('Location:'.admin_url('index'));
}
elseif ($target == 'member'){
    $selc = $db->prepare('SELECT * FROM members WHERE id=?');
    $selc->execute([$id]);
    $selected = $selc->fetch(PDO::FETCH_ASSOC);

    delete_photo(permalink($selected['name']),'member');


    $query = $db->prepare('DELETE FROM members WHERE id=:id');
    $query->execute([
        'id'=>$id
    ]);

    header('Location:'.admin_url('members'));
}
elseif ($target == 'user'){
    $query = $db->prepare('DELETE FROM admins WHERE admin_id=:id');
    $query->execute([
        'id'=>$id
    ]);
    header('Location:'.admin_url('users'));
}
elseif ($target=='contact'){
    $query = $db->prepare('DELETE FROM contact WHERE contact_id=:id');
    $query->execute([
        'id'=>$id
    ]);
    header('Location:'.admin_url('contact'));
}
elseif ($target=='partner'){
    $selc = $db->prepare('SELECT * FROM partners WHERE partner_id=?');
    $selc->execute([$id]);
    $selected = $selc->fetch(PDO::FETCH_ASSOC);

    delete_photo(permalink($selected['partner_name']),'partners');

    $query = $db->prepare('DELETE FROM partners WHERE partner_id=:id');
    $query->execute([
        'id'=>$id
    ]);

    header('Location:'.admin_url('partners'));
}
*/