<?php

namespace DesignPatterns\Behavioral\Specification\Box;

/**
 * Class Square
 */
class Square implements SpecificationInterface
{
    public function isSatisfiedBy(Item $item): bool
    {
        return $item->getHeight() === $item->getWidth();
    }
}
