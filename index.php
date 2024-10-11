<?php

$uri = $_SERVER['REQUEST_URI'];
$route = preg_replace('/\?.*/', "", $uri);

if($route === '/'){
    include('src/Controllers/UserController.php');
    $user_controller = new UserController();
    $user_controller->index(['message' => 'working']);
}
else if ($route === '/fruit'){
    include('src/Controllers/FruitController.php');
    $fruit_controller = new FruitController();
    $fruit_controller->index();
}
else if ($route === '/form'){
    include('src/Controllers/FormHandleController.php');
    $form_handle_controller = new FormHandleController();
    $form_handle_controller->index();
}
else if ($route === '/post-form'){
    include('src/Controllers/FormHandleController.php');
    $form_handle_controller = new FormHandleController($_POST['name']);
    $form_handle_controller->insert($_POST['name']);
}