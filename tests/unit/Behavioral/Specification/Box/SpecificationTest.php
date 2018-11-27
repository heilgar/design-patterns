<?php

namespace Test\Behavioral\Specification\Box;

use DesignPatterns\Behavioral\Specification\Box\{
    Item, AndSpecification, NotSpecification, OrSpecification, Rectangle, Square
};
use PHPUnit\Framework\TestCase;


class SpecificationTest extends TestCase
{
    /** @var Item $itemSquare */
    private $itemSquare;
    /** @var Item $itemRectangle */
    private $itemRectangle;
    /** @var Square $squareSpecification */
    private $squareSpecification;
    /** @var Rectangle $rectangleSpecification */
    private $rectangleSpecification;
    /** @var OrSpecification $orSpecification */
    private $orSpecification;
    /** @var AndSpecification $andSpecification*/
    private $andSpecification;
    /** @var NotSpecification $notSpecification */
    private $notSpecification;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->itemSquare = new Item(12.4, 12.4);
        $this->itemRectangle = new Item(12, 14);

        $this->squareSpecification = new Square();
        $this->rectangleSpecification = new Rectangle();

        $this->orSpecification = new OrSpecification(
            $this->squareSpecification,
            $this->rectangleSpecification
        );

        $this->andSpecification = new AndSpecification(
            $this->rectangleSpecification,
            $this->squareSpecification
        );

        $this->notSpecification = new NotSpecification($this->andSpecification);
    }

    public function testIsRectangle()
    {
        $this->assertTrue($this->rectangleSpecification->isSatisfiedBy($this->itemRectangle));
        $this->assertTrue($this->rectangleSpecification->isSatisfiedBy($this->itemSquare));
    }

    public function testIsSquare()
    {
        $this->assertTrue($this->squareSpecification->isSatisfiedBy($this->itemSquare));
        $this->assertFalse($this->squareSpecification->isSatisfiedBy($this->itemRectangle));

//        $this->assertTrue($this->squareSpecification->isSatisfiedBy($this->itemRectangle));
    }

    public function testOrSpecification()
    {
        $this->assertTrue($this->orSpecification->isSatisfiedBy($this->itemSquare));
        $this->assertTrue($this->orSpecification->isSatisfiedBy($this->itemRectangle));
    }

    public function testAndSpecification()
    {
        $this->assertTrue($this->andSpecification->isSatisfiedBy($this->itemSquare));
    }

    public function testNotSpecification()
    {
        $this->assertTrue($this->notSpecification->isSatisfiedBy($this->itemRectangle));
    }
}
