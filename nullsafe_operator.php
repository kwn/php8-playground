<?php

class Foo
{
    public function date(): ?DateTime
    {
        return random_int(0, 1) % 2 === 0 ? new DateTime() : null;
    }
}

$foo = new Foo();

var_dump($foo->date()?->format('Y-m-d'));
