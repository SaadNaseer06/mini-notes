<?php
use Core\Database;

use Core\App;

$db = App::resolve(Database::class);

$currentUserId = 11;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findorfail();

?>