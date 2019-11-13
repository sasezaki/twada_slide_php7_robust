<?php

declare(strict_types=1);

use App\BugRepository;
use App\PdoFactory;

require __DIR__ . '/../vendor/autoload.php';

$pdoFactory = new PdoFactory([
    'dsn' => 'string',
    'usr' => 'user',
    'passwd' => 'passwd',
]);
print_r((new BugRepository($pdoFactory()))->findAll([
    'assignedTo' => '12',
    'status' => 'OPEN',
]));
