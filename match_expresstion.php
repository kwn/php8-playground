<?php

$status = 200;

$test = match($status) {
    200, 201 => 'ok',
    300, 301, 302 => 'redirection',
    400, 401, 402 => 'user error',
    default => 'server error'
};

// var_dump($test);



$httpStatus = static fn(int $code): string => match($code) {
    200, 201 => 'ok',
    300, 301, 302 => 'redirection',
    400, 401, 402 => 'user error',
    default => 'server error'
};

echo $httpStatus(302);



$httpStatus = static function (int $code) {
    switch ($code) {
        case 200:
        case 201:
            return 'ok';
        case 300:
        case 301:
        case 302:
            return 'redirection';
        case 400:
        case 401:
        case 402:
            return 'user error';
        default:
            return 'server error';
    }
};
