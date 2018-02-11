<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/11
 * Time: 21:18
 */
namespace DesignPattern\Creational\Prototype;

class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'bar';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}