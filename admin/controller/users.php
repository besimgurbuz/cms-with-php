<?php
$title = 'Admins';

$query = $db->prepare('SELECT * FROM admins');
$query->execute();
$admins = $query->fetchAll(PDO::FETCH_ASSOC);

require admin_view('users');