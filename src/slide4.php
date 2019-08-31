<?php

namespace App;

use PDO;
use App\Bug;

class BugRepository
{
    public static function findAll($params)
    {
        global $CONF;
        $pdo = new PDO($CONF['dsn'], $CONF['usr'], $CONF['passwd'],
                       [ PDO::ATTR_EMULATE_PREPARES => false]);
        $sql = 'SELECT bug_id, summary, date_reported FROM Bugs
            WHERE assigned_to = :assignedTo AND status = :status';
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_CLASS, Bug::class);
    }
}
