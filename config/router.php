<?php

use Illuminate\Events\Dispatcher;

$request = \Illuminate\Http\Request::createFromGlobals();
function request() {
    global $request;

    return $request;
}

$dispatcher = new Dispatcher();
$container = new \Illuminate\Container\Container();
$router = new \Illuminate\Routing\Router($dispatcher, $container);
function router() {
    global $router;

    return $router;
}

$router->get('/', function () {
    header('Location: /login');
});

$router->get('/login', function () {
    return view('login');
});

$router->get('/register', function () {
    return view('register');
});

$router->get('/forgot-password', function () {
    return view('forgot-password');
});
