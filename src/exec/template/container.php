<?php
require __DIR__ . '/../../../vendor/autoload.php';

use Tsuguya\GuideGenerics\Items\Container;
use Tsuguya\GuideGenerics\Items\Dog;

$container = new Container(new Dog());

echo $container->animal->getCommand();
