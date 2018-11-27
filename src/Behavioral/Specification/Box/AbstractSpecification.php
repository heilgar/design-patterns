<?php

namespace DesignPatterns\Behavioral\Specification\Box;


abstract class AbstractSpecification implements SpecificationInterface
{
    /**
     * @var SpecificationInterface[]
     */
    protected $specifications;

    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }
}