<?php

// Create required directories
$directories = [
    __DIR__ . '/storage',
    __DIR__ . '/storage/runtime',
    __DIR__ . '/storage/logs',
    __DIR__ . '/storage/config-backups',
    __DIR__ . '/storage/composer-backups',
    __DIR__ . '/storage/temp',
    __DIR__ . '/templates',
    __DIR__ . '/migrations',
    __DIR__ . '/translations',
];

foreach ($directories as $directory) {
    if (!file_exists($directory)) {
        mkdir($directory, 0777, true);
    }
} 