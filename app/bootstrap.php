<?php

\error_reporting(\E_STRICT | \E_ALL);

if (!\defined('PHP_VERSION_ID') || \PHP_VERSION_ID < 80200) {
    if (\PHP_SAPI === 'cli') {
        echo 'Unsupported PHP Version, supported is  PHP 8.2.0 or later.';
    } else {
        echo '<p>Unsupported PHP Version, supported is PHP 8.2.0 or later.</p>';
    }

    \http_response_code(503);
    exit(1);
}

if (\PHP_SAPI !== 'cli') {
    \ini_set('session.use_cookies', '1');
    \ini_set('session.use_only_cookies', '1');
    \ini_set('session.use_trans_sid', '0');
    \ini_set('session.cache_limiter', '');
    \ini_set('session.cookie_httponly', '1');
}

\setlocale(\LC_ALL, 'C');

\mb_internal_encoding('UTF-8');
\mb_language('uni');

\date_default_timezone_set('UTC');

if (\getenv('APP_ENV') !== 'production') {
    try {
        $dotenv = \Dotenv\Dotenv::createImmutable(\dirname(__DIR__));
        $dotenv->safeLoad();
    } catch (\Dotenv\Exception\InvalidFileException) {

    }
}
