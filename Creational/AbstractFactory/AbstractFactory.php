<?php
/**
 * Created by Kevin181.
 * Date: 2018/1/25
 * Time: 20:05
 */
namespace DesignPattern\Creational\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function createText(string $content);
}