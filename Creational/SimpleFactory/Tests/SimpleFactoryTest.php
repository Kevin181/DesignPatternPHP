<?php
/**
 * Created by Kevin181.
 * Date: 2018/1/26
 * Time: 19:14
 */
namespace DesignPattern\Creational\SimpleFactory\Tests;

use DesignPattern\Creational\SimpleFactory\Factory;
use DesignPattern\Creational\SimpleFactory\Bicycle;
use DesignPattern\Creational\SimpleFactory\Car;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTests extends TestCase
{
    protected $factory;

    protected $bicycle;

    protected $car;

    public function setUp()
    {
        $this->factory = new Factory();
    }

    public function testFactory()
    {
        $this->bicycle = $this->factory->create('bicycle');
        $this->car = $this->factory->create('car');

        $this->assertInstanceOf(Bicycle::class, $this->bicycle);
        $this->assertInstanceOf(Car::class, $this->car);
    }

    public function testFactoryWithUnderfind()
    {
        $this->assertFalse($this->factory->create('underfind'));
    }

    public function testBicycle()
    {
        $this->assertEquals('The bicycle is running', $this->bicycle->run());
    }

    public function testCar()
    {
        $this->assertEquals('The car is running', $this->car->run());
    }
}