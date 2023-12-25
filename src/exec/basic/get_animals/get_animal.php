<?php
require __DIR__ . '/../../../../vendor/autoload.php';

use Tsuguya\GuideGenerics\Items\Cat;
use Tsuguya\GuideGenerics\Items\Dog;

function get_animals(): array
{
    $arr = [];

    for ($i = 0;  $i < 10; $i++) {
        $arr[] = $i % 2 === 0 ? new Dog() : new Cat();
    }

    return $arr;
}

$array = get_animals();

foreach ($array as $value) {
    echo $value->getType();
}