<?php

declare(strict_types=1);

$foo = static fn(int|string $variable): string => is_int($variable) ? 'its int' : 'its string';

function foo(int|string $variable): int|string {
    return is_int($variable) ? $variable * 4 : str_shuffle($variable);
}

echo $foo('blabla');
echo $foo(1234);
// echo $foo(1.4);

echo foo('blabla');
echo foo(1234);
// echo $foo(1.4);
