<?php

namespace Smaloron\Test\DAO;

use \PDO;
use Smaloron\Test\Entity\Address;

class AddressDAO
{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insert(Address $address)
    {
        $sql = "INSERT INTO adresses (rue, code_postal, ville)
                VALUES (:rue, :codePostal, :ville)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($address->toArray());
        $address->setId($this->pdo->lastInsertId());
    }
}