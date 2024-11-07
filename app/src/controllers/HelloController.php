<?php

namespace controllers;


class HelloController implements \light\http\ControllerInterface
{
    public function main(): void
    {
        echo 'hello';
    }
}