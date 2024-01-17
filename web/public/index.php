<?php

require_once __DIR__ . '/../bootstrap/app.php';
require_once __DIR__ . '/../../vendor/autoload.php';

if (\getenv('APP_ENV') !== 'production') {
    try {
        $dotenv = \Dotenv\Dotenv::createImmutable(\dirname(__DIR__));
        $dotenv->safeLoad();
    } catch (\Dotenv\Exception\InvalidFileException) {

    }
}

$application = new \App\Application();
$application->start();

