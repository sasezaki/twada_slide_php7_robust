<?php

declare(strict_types=1);

namespace App;

use PDO;

class BugRepository
{
    /** @var PDO */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @param array<string, string> $params
     * @return array<Bug>
     * @psalm-suppress MixedReturnTypeCoercion
     */
    public function findAll(array $params) : array
    {
        $pdo  = $this->pdo;
        $sql  = 'SELECT bug_id, summary, date_reported FROM Bugs
            WHERE assigned_to = :assignedTo AND status = :status';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $bugs = $stmt->fetchAll(PDO::FETCH_CLASS, 'App\Bug');
        $return = [];
        foreach ($bugs as $bug) {
            $return[] = $bug->fooo;
        }

        return $return;
    }
}
