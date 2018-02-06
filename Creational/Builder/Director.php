<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/6
 * Time: 21:21
 */
namespace DesignPattern\Creational\Builder;

/**
 * Director is part of Builder pattern.It knows the interface of the builder
 * and builds a complex object with the help of the builder.
 *
 * You can also inject many builders instead of one to build more complex objects.
 *
 * Class Director
 * @package DesignPattern\Creational\Builder
 */
class Director
{
    /**
     * Build a vehicle.
     * @param BuilderInterface $build
     * @return Parts\Vehicle
     */
    public function builder(BuilderInterface $build)
    {
        $build->createVehicle();
        $build->addEngine();
        $build->adWheel();
        $build->addDoors();

        return $build->getVehicle();
    }

}