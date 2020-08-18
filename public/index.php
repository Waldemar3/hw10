<?php

require_once '../vendor/autoload.php';

require_once '../config/eloquent.php';
require_once '../config/blade.php';
require_once '../config/router.php';

function active($page){
    $active = explode('/', request()->url());
    return end($active) == $page ? 'active' : 'inactive';
}

$response = $router->dispatch($request);
echo $response->getContent();