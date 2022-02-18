<?php

namespace App;

class Example
{
    protected $colaborator;

    protected $foo;

    public function __construct(Collaborator $colaborator, $foo)
    {
        $this->colaborator = $colaborator;

        $this->foo = $foo;
    }
}
