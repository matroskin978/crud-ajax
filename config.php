<?php

return [
    'db' => [
        'host' => 'localhost',
        'dbname' => 'world2',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8', // utf8mb4
        'options' => [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
    'per_page' => 10,
];
