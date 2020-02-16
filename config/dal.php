<?php
declare(strict_types=1);

use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Here we map our UserRepository interface to its in memory implementation
    $containerBuilder->addDefinitions([
        \MyProject\DAO\Test\PostDAO::class => function (\Psr\Container\ContainerInterface $c) {
            return new \MyProject\DAO\Test\PostDAO($c);
        }
    ]);
};
