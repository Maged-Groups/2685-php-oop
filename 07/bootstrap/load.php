<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Model;

require_once __DIR__ . '/../vendor/autoload.php';


new Model();


// routes


$routes = [

    'get' => [
        '/users' => [UserController::class, 'all_users'],
        '/users/create' => [UserController::class, 'create'],
        '/products' => [ProductController::class, 'index']
    ],


    'post' => [],
];






$method = strtolower($_SERVER['REQUEST_METHOD']);
$uri = $_SERVER['REQUEST_URI'];


// dump($method);
// dump($uri);

$class = $routes[$method][$uri][0];
$class_method = $routes[$method][$uri][1];


call_user_func_array([$class , $class_method], []);





// dump($routes);