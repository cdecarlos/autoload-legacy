<?php

require_once 'loader.php';

use CompanyNamespace\PersonObject;

$person = new PersonObject('John Doe');

echo $person->getName();
