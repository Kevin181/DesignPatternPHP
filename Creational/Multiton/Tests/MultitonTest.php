<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/8
 * Time: 20:56
 */
namespace DesignPattern\Creational\Multiton\Tests;

use DesignPattern\Creational\Multiton\Multiton;
use PHPUnit\Framework\TestCase;

class Multiton extends TestCase
{
    private $multiton = array();

    public function setUp()
    {
        $this->multiton[Multiton::INSTANCE_1] = Multiton::getInstance(Multiton::INSTANCE_1);
        $this->multiton[Multiton::INSTANCE_2] = Multiton::getInstance(Multiton::INSTANCE_2);
    }

    public function testMultitonUniquenessForEveryInstance()
    {
        $this->assertInstanceOf(Multiton::class, $this->multiton[Multiton::INSTANCE_1]);
        $this->assertInstanceOf(Multiton::class, $this->multiton[Multiton::INSTANCE_2]);

        $this->assertNotSame(this->multiton[Multiton::INSTANCE_1], this->multiton[Multiton::INSTANCE_2]);
    }
}