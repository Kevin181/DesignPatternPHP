<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/6
 * Time: 20:49
 */
namespace DesignPattern\Creational\Builder;

interface BuilderInterface
{
    public function createVehicle();

    public function adWheel();

    public function addEngine();

    public function addDoors();

    /**
     * @return Parts\Vehicle
     */
    public function getVehicle();
}