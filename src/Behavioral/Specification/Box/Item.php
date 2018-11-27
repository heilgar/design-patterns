<?php

namespace DesignPatterns\Behavioral\Specification\Box;

class Item
{
    /** @var float $height */
    private $height;

    /** @var float $with */
    private $with;

    public function __construct(float $height, float $width)
    {
        $this->height = $height;
        $this->with = $width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getWidth(): float
    {
        return $this->with;
    }
}
