<?php

namespace public\src\controllers;


class HelloController implements \light\http\interfaces\ControllerInterface
{
    public function main(): void
    {
        echo 'hello';
    }
}