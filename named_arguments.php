<?php

function profile(string $name = 'default', ?string $surname = 'test', ?int $age = null, ?int $height = null): void {
    var_dump($name, $surname, $age, $height);
}

$profile = static function(string $name = 'default', ?string $surname = 'test', ?int $age = null, ?int $height = null): void {
    var_dump($name, $surname, $age, $height);
};

profile('Foo', 'Bar', 35, 180);
profile(surname: null, age: 22, height: 199);
$profile(surname: null, age: 22, height: 199);
