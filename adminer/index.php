<?php
if (empty($_COOKIE['adminer_permanent'])) {
    $server = getenv('POSTGRES_HOST') ?: 'db';
    $username = getenv('POSTGRES_USER') ?: 'app';
    $password = getenv('POSTGRES_PASSWORD') ?: 'app';
    $db = getenv('POSTGRES_DB') ?: 'app';

    $_POST['auth'] = [
        'driver' => 'pgsql',
        'server' => $server,
        'username' => $username,
        'password' => $password,
        'db' => $db,
        'permanent' => 1,
    ];
}
require __DIR__.'/adminer.php';