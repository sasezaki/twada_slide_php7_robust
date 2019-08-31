<?php

declare(strict_types=1);

namespace App;

use PDO;

class BugRepository
{
    /**
     * @param array $params
     * @return Bug[]
     */
    public static function findAll(array $params) : array
    {
        $CONF = $GLOBALS['CONF'];
        $pdo  = new PDO($CONF['dsn'], $CONF['usr'], $CONF['passwd'], [ PDO::ATTR_EMULATE_PREPARES => false]);
        $sql  = 'SELECT bug_id, summary, date_reported FROM Bugs
            WHERE assigned_to = :assignedTo AND status = :status';
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_CLASS, Bug::class);
    }
}
