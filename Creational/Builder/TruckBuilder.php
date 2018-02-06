<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/6
 * Time: 21:13
 */
namespace DesignPattern\Creational\Builder;

use DesignPattern\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{
    /**
     * @var Parts\Truck;
     */
    private $truck;

    /**
     * Create a truck instance.
     */
    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->truck = new Parts\Truck();
    }

    /**
     * Add engine to truck.
     */
    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->truck->setPart('truckEngine', new Parts\Engine());

    }

    /**
     * Add wheel to truck.
     */
    public function adWheel()
    {
        // TODO: Implement adWheel() method.
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());
    }

    /**
     * Add doors to truck.
     */
    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->truck->setPart('leftDoor', new Parts\Door());
        $this->truck->setPart('rightDoor', new Parts\Door());
    }

    /**
     * Return truck instance.
     * @return Parts\Truck
     */
    public function getVehicle()
    {
        // TODO: Implement getVehicle() method.
        return $this->truck;
    }