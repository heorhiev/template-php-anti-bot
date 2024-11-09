<?php

namespace controllers;


class HelloController implements http\src\ControllerInterface
{
    public function main(): void
    {
        echo 'hello';
    }
}