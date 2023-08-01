<?php
use core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 11;


$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findorfail();

authorize($note['user_id'] === $currentUserId);



view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);

