<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Bonds23\Nacho\Nacho;

$nacho = new Nacho;

echo $nacho->sayCheese();