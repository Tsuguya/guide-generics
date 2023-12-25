<?php
require __DIR__ . '/../../../vendor/autoload.php';

use Tsuguya\GuideGenerics\Items\Container2;
use Tsuguya\GuideGenerics\Items\Dog;

$container = new Container2(new Dog());

echo $container->animal->getCommand();
