<?php

namespace Smaloron\Test\Controller;

use Smaloron\Test\DAO\AddressDAO;
use \PDO;
use Smaloron\Test\Entity\Address;

class AddressController
{

    private AddressDAO $dao;

    public function __construct()
    {
        $pdo = new PDO(
            "mysql:host=localhost;dbname=cda_poitiers_2023_sql;charset=utf8",
            "root",
            "",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        $this->dao = new AddressDAO($pdo);
    }

    public function insert()
    {
        $address = new Address;
        $address->setRue("28 rue de l'avenir")
            ->setCodePostal("5690")->setVille("TRIFOUILLY SUR ENDIVE");

        $this->dao->insert($address);

        var_dump($address);
    }

    public function showOne(int $id)
    {
        $address = $this->dao->findOneById($id);
        var_dump($address);
    }
}