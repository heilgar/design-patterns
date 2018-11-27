<?php

namespace DesignPatterns\Behavioral\Specification\Box;

/**
 * Interface SpecificationInterface
 */
interface SpecificationInterface
{
    public function isSatisfiedBy(Item $item): bool;
}
