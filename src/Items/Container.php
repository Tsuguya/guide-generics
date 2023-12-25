<?php

namespace Tsuguya\GuideGenerics\Items;

readonly class Container
{
    public function __construct(public Animal $animal)
    {
    }
}