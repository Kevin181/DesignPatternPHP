<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/6
 * Time: 21:31
 */
namespace DesignPattern\Creational\Builder\Tests;

use DesignPattern\Creational\Builder\Parts\Car;
use DesignPattern\Creational\Builder\Parts\Truck;
use DesignPattern\Creational\Builder\Director;
use DesignPattern\Creational\Builder\CarBuilder;
use DesignPattern\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /**
     * @var Director
     */
    private $director;

    public function setUp()
    {
        $this->director = new Director();
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $car = $this->director->builder($carBuilder);

        $this->assertInstanceOf(Car::class, $car);
    }

    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $truck = $this->director->builder($truckBuilder);

        $this->assertInstanceOf(Truck::class, $truck);
    }
}