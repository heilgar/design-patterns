<?php

namespace DesignPatterns\Behavioral\Specification\Box;

/**
 * Class OrSpecification
 */
class OrSpecification extends AbstractSpecification
{
    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($item)) {
                return true;
            }
        }

        return false;
    }
}