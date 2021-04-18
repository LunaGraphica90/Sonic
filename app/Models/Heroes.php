<?php

namespace Sonic\Models;

use Sonic\Utils\Database;


class Heroes extends CoreModel
{
    private $description;
    private $picture;
    private $type_id;

    public function findAll()
    {
        $sql = 'SELECT * FROM `character`';
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, '\Sonic\Models\Heroes');

        return $results;
    }

    public function findForHome()
    {
        $sql = '
        SELECT `character`.*, `type`.`name` AS `type_name`, `type`.`id` AS `ID_TYPE`
        FROM `character`
        INNER JOIN `type` ON `character`.`type_id` = `type`.`id` 
        ORDER BY `character`.`name`
        ';
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, '\Sonic\Models\Heroes');

        return $results;
    }


    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }
}