<?php

return [
    'db' => [
        'dsn' => 'pgsql:host='.getenv('PG_HOST').';port='.getenv('PG_PORT').';dbname='.getenv('PG_DATABASE'),
        'username' => getenv('PG_USERNAME'),
        'password' => getenv('PG_PASSWORD'),
    ]
];
