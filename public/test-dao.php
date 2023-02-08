<?php

use Smaloron\Test\Controller\AddressController;

include "../vendor/autoload.php";

$controller = new AddressController;
//$controller->insert();

$controller->showOne(3);