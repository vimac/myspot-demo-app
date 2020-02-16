<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        LoggerInterface::class => function (ContainerInterface $c) {
            $settings = $c->get('settings');

            $loggerSettings = $settings['logger'];
            $logger = new Logger($loggerSettings['name']);

            $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
            $logger->pushHandler($handler);

            return $logger;
        },
        'view' => function (ContainerInterface $c) {
            return new \Slim\Views\PhpRenderer(__DIR__ . '/../template/');
        },
        'pdo' => function (ContainerInterface $c) {
            try {
                $dbFile = __DIR__ . '/../data/data.sqlite';
                $init = true;
                if (file_exists($dbFile)) {
                    $init = false;
                }
                $pdo = new PDO('sqlite:' . $dbFile);
                if ($init) {
                    $pdo->exec(file_get_contents(__DIR__ . '/../../data/ddl.sql'));
                }
                return $pdo;
            } catch (PDOException $e) {
                die ('DB Error');
            }
        },
        'initializer' => function (ContainerInterface $c) {
            return new \MyProject\Util\Initializer($c);
        },
        'sqlMapConfig' => function (ContainerInterface $c) {
            /** @var PDO $pdo */
            $pdo = $c->get('pdo');
            $path = __DIR__ . '/myspot';

            return new \MySpot\SqlMapConfig($path, $pdo, $c->get(LoggerInterface::class));
        },
        'sqlMap' => function (ContainerInterface $c) {
            return new \MySpot\SqlMap($c->get('sqlMapConfig'));
        }
    ]);
};
