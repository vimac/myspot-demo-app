<?php


namespace MyProject\Util;


use MyProject\Component\Component;

class Initializer extends Component
{

    public function init()
    {
        $pdo = $this->getContainer()->get('pdo');
        $pdo->exec(file_get_contents(__DIR__ . '/../../data/ddl.sql'));
    }

    public function reset()
    {
        $pdo = $this->getContainer()->get('pdo');
        $pdo->exec('DROP TABLE `post`');
    }

}
