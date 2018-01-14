<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

use Doctrine\DBAL\Driver\PDOMySql\Driver;

return [
    'doctrine' => [
        'connection' => [
            // default connection name
            'orm_default' => [
                'driverClass' => Driver::class,
                'params' => [
                    'host'     => $_ENV['SKEL_DB_HOST'] ?? 'localhost',
                    'port'     => $_ENV['SKEL_DB_PORT'] ?? '3306',
                    'user'     => $_ENV['SKEL_DB_USER'] ?? 'user',
                    'password' => $_ENV['SKEL_DB_PASS'] ?? 'user',
                    'dbname'   => $_ENV['SKEL_DB_NAME'] ?? 'zend',
                ],
            ],
        ],
    ],
];
