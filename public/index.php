<?php
use App\BugRepository;

require_once __DIR__ . '/../src/slide4.php';

print_r(BugRepository::findAll([
    'assignedTo' => '12',
    'status' => 'OPEN'
]));