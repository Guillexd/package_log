<?php
require __DIR__ . "/../vendor/autoload.php";

use Log\PackageLog\Logger;

$logger = Logger::log('adios');

echo $logger;
