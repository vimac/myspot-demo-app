<?php
declare(strict_types=1);

use Slim\App;

return function (App $app) {

    $app->get('/', \MyProject\Controller\IndexController::class . ':getAllPosts');
    $app->get('/user/{user}', \MyProject\Controller\IndexController::class . ':getPostByUser');
    $app->get('/users/{users}', \MyProject\Controller\IndexController::class . ':getPostByUsers');
    $app->get('/reset', \MyProject\Controller\IndexController::class . ':resetAll');
    $app->get('/delete/{user}', \MyProject\Controller\IndexController::class . ':delete');
    $app->get('/update/{user}', \MyProject\Controller\IndexController::class . ':update');
    $app->post('/new', \MyProject\Controller\IndexController::class . ':newPost');

};
