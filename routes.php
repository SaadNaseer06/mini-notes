<?php


$router->get('/practice/home' , 'controllers/index.php');
$router->get('/practice/about' , 'controllers/about.php');
$router->get('/practice/contact' , 'controllers/contact.php');




$router->get('/practice/notes/index' , 'controllers/notes/index.php')->only('auth');
$router->get('/practice/notes/index/shows' , 'controllers/notes/show.php');
$router->delete('/practice/notes/index/shows' , 'controllers/notes/destroy.php');

$router->get('/practice/notes/index/shows/edit' , 'controllers/notes/edit.php');
$router->patch('/practice/notes/index' , 'controllers/notes/update.php');


$router->get('/practice/notes/create' , 'controllers/notes/create.php');
$router->post('/practice/notes/create' , 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');

$router->get('/practice/register' , 'controllers/registration/create.php')->only('guest');
$router->post('/practice/register' , 'controllers/registration/store.php');




// return [
//     '/practice/home' => 'core/index.php',
//     '/practice/about' => 'controllers/about.php',
//     '/practice/notes/index' => 'controllers/notes/index.php', 
//     '/practice/notes/index/shows' => 'controllers/notes/show.php',
//     '/practice/notes/create' => 'controllers/notes/create.php',
//     '/practice/contact' => 'controllers/contact.php',
// ];