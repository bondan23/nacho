<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use PhilipBrown\Nacho\Nacho;

$nacho = new Nacho;

echo $nacho->sayCheese();