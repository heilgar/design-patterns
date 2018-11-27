<?php

namespace DesignPatterns\Behavioral\Specification\Box;

/**
 * Class AndSpecification
 */
class AndSpecification extends AbstractSpecification
{
    /**
     * if at least one specification is false, return false, else return true.
     */
    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }

        return true;
    }
}