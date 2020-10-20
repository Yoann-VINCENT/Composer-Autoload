<?php

require __DIR__ . '/../vendor/autoload.php';

use \App\Wcs\Hello;
$hello = new Hello;
echo $hello->talk();

use \HelloWorld\SayHello;
$sayHello = new SayHello;
echo $sayHello->world();
