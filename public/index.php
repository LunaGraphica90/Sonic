<?php

// Chargement de toutes les dépendances installées avec Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Instanciation de Altorouter
$router= new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

// Déclaration des routes nécessaires

$router->map('GET', '/', [
    'controller' => 'MainController',
    'method' => 'home',
], 'home');

$router->map('GET', '/les-createurs', [
    'controller' => 'MainController',
    'method' => 'creator',
], 'creator');

// correspondance de l'url demandé avec les routes
$match = $router->match();

if (is_array($match)) {

    $controllerName = '\Sonic\Controllers\\' . $match['target']['controller'];
    $methodName = $match['target']['method'];

    $params = $match['params'];

    $controller = new $controllerName(); 
    $controller->$methodName($params);
} else {

    $controller = new \Sonic\Controllers\MainController();
    $controller->error404();

}
