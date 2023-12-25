<?php

namespace Tsuguya\GuideGenerics\Items;

class Dog implements Animal
{
    public function getType(): string
    {
        return 'dog';
    }

    public function getCommand(): string
    {
        return 'お座り';
    }
}
