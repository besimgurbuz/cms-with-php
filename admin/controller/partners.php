<?php
$title = 'Members';

$query = $db->prepare('SELECT * FROM partners');
$query->execute();
$rows = $query->fetchAll(PDO::FETCH_ASSOC);

require admin_view('partners');