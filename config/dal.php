<?php
declare(strict_types=1);

use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        \MyProject\DAO\Test\PostDAO::class => function (\Psr\Container\ContainerInterface $c) {
            return new \MyProject\DAO\Test\PostDAO($c);
        }
    ]);
};
