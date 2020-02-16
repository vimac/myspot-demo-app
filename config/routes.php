<?php
declare(strict_types=1);

use Slim\App;

return function (App $app) {

    $app->get('/', \MyProject\Controller\IndexController::class . ':getAllPosts');
    $app->get('/user/{user}', \MyProject\Controller\IndexController::class . ':getPostByUser');
    $app->get('/users/{users}', \MyProject\Controller\IndexController::class . ':getPostByUsers');

};
