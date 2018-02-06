<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/6
 * Time: 21:00
 */
namespace DesignPattern\Creational\Builder\Parts;

abstract class Vehicle
{
    /**
     * @var array --- object[]
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}