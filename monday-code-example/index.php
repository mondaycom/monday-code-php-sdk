<?php

$env = getenv();

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
        case '/':
            require __DIR__ . '/home.php';
            break;

    case '/get-secure-storage':
        require __DIR__ . '/get-secure-storage.php';
        break;

    case '/set-secure-storage':
        require __DIR__ . '/set-secure-storage.php';
        break;

    default:
        echo '404';
        http_response_code(404);
}