<?php

declare(strict_types=1);

use App\BugRepository;

require __DIR__ . '/../vendor/autoload.php';

print_r(BugRepository::findAll([
    'assignedTo' => '12',
    'status' => 'OPEN',
]));
