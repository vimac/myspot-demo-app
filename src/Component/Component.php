<?php

namespace MyProject\Component;

use Psr\Container\ContainerInterface as Container;
use Psr\Log\LoggerInterface;

abstract class Component
{

    /**
     * @var Container
     */
    private $_container;

    public function __construct(Container $container)
    {
        $this->_container = $container;
    }

    protected function getContainer(): Container
    {
        return $this->_container;
    }

    protected function logger(): LoggerInterface
    {
        return $this->getContainer()->get(LoggerInterface::class);
    }

}
