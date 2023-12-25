<?php

namespace Tsuguya\GuideGenerics\Items;

use Tsuguya\GuideGenerics\Items\Animal as TAnimal;

/**
 * @template TAnimal of Animal
 */
readonly class Container2
{
    /**
     * @param TAnimal $animal
     */
    public function __construct(public Animal $animal)
    {
    }
}