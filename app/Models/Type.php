<?php

namespace Sonic\Models;

use Sonic\Utils\Database;

class Type extends CoreModel
{
    public function findAll()
    {
        $sql = 'SELECT * FROM `type`';
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, '\Sonic\Models\Heroes');

        return $results;
    }
}