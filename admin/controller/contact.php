<?php
$title = 'Contact';

$query = $db->prepare('SELECT * FROM contact');
$query->execute();
$rows = $query->fetchAll(PDO::FETCH_ASSOC);

require admin_view('contact');