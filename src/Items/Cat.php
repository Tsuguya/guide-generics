<?php

namespace Tsuguya\GuideGenerics\Items;

class Cat implements Animal
{
    public function getType(): string
    {
        return 'cat';
    }
}