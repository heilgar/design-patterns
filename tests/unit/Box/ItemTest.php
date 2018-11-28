<?php

use Box\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    /** @var Item $item */
    private $item;
    /** @var Item $item2 */
    private $item2;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->item = new Item(12.1, 12.1);
        $this->item2 = new Item(12, 15);
    }

    public function testIsSquare()
    {
        $this->assertTrue($this->item->isSquare());
        $this->assertFalse($this->item2->isSquare());
    }

    public function testIsRectangle()
    {
        $this->assertTrue($this->item->isSquare());
        $this->assertTrue($this->item->isRectangle());
    }

    public function testSquareOrRectangle()
    {
        $this->assertTrue($this->item->squareOrRectangle());
        $this->assertTrue($this->item2->squareOrRectangle());
    }

    public function testSquareAndRectangle()
    {
        $this->assertTrue($this->item->squareAndRectangle());
        $this->assertFalse($this->item2->squareAndRectangle());
    }

    public function testNotSquareAndRectangle()
    {
        $this->assertFalse($this->item->notSquareAndRectangle());
    }
}