<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/6
 * Time: 20:54
 */
namespace DesignPattern\Creational\Builder;

use DesignPattern\Creational\Builder\Parts\Vehicle;

class CarBuilder implements BuilderInterface
{
    /**
     * @var Parts\Car;
     */
    private $car;

    /**
     * Create a car instance.
     */
    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->car = new Parts\Car();
    }

    /**
     * Add engine to car.
     */
    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->car->setPart('engine', new Parts\Engine());

    }

    /**
     * Add wheel to car.
     */
    public function adWheel()
    {
        // TODO: Implement adWheel() method.
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }

    /**
     * Add doors to car.
     */
    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->car->setPart('leftDoor', new Parts\Door());
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    /**
     * Return car instance.
     * @return Parts\Car
     */
    public function getVehicle()
    {
        // TODO: Implement getVehicle() method.
        return $this->car;
    }
}