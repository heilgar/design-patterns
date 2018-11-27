<?php

namespace DesignPatterns\Behavioral\Specification\Box;

/**
 * Class Rectangle
 */
class Rectangle implements SpecificationInterface
{
    public function isSatisfiedBy(Item $item): bool
    {
        return
            ($item->getHeight() >= $item->getWidth()) ||
            ($item->getHeight() <= $item->getWidth())
        ;
    }
}