<?php
require __DIR__ . '/../../../../vendor/autoload.php';

function get_array(): array
{
    $arr = [];

    for ($i = 0;  $i < 10; $i++) {
        $arr[] = $i;
    }

    return $arr;
}

$array = get_array();

foreach ($array as $value) {
    echo $value;
}
