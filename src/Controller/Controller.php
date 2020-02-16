<?php


namespace MyProject\Controller;


use MyProject\Component\Component;
use Slim\Views\PhpRenderer;

abstract class Controller extends Component
{

    protected function getRender(): PhpRenderer
    {
        return $this->getContainer()->get('view');
    }

}
