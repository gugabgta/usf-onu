<?php

$GLOBALS['config'] = [
    'app' => [
        'name'          => 'Atributos da vida marinha',
    ],
    'mysql' => [
        'host'          => getenv('MSQL_HOST') ?? '127.0.0.1',
        'username'      => getenv('MYSQL_USERNAME') ?? 'mysql',
        'password'      => getenv('MYSQL_PASSWORD') ?? 'pass123',
        'db_name'       => getenv('MYSQL_DBNAME')  ?? 'mysql'
    ],
];
