<?php

namespace Box;

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

    public function isSquare(): bool
    {
        return $this->getHeight() == $this->getWidth();
    }

    public function isRectangle(): bool
    {
        return
            ($this->getHeight() >= $this->getWidth()) ||
            ($this->getHeight() <= $this->getWidth())
        ;
    }

    public function squareOrRectangle(): bool
    {
        return $this->isSquare() || $this->isRectangle();
    }

    public function squareAndRectangle(): bool
    {
        return $this->isSquare() && $this->isRectangle();
    }

    public function notSquareAndRectangle(): bool
    {
        return !$this->squareAndRectangle();
    }
}
