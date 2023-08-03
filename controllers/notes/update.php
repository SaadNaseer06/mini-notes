<?php
use Core\Database;

use Core\App;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 11;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findorfail();

authorize($note['user_id'] === $currentUserId);

$errors = [];

if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}


if (count($errors)) {
    return view('/practice/notes/index', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
]);

//redirect the user

header('location: /practice/notes/index');
die();
?>