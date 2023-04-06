<?php

$loader = require __DIR__ . '/vendor/autoload.php';

// Note: Add namespace and path to load files on autoloader
$loader->addPsr4('CompanyNamespace\\', __DIR__ . '/class');
