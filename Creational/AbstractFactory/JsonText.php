<?php
/**
 * Created by Kevin181.
 * Date: 2018/1/25
 * Time: 20:18
 */
namespace DesignPattern\Creational\AbstractFactory;

class JsonFactory extends Text
{
    public function render()
    {
        // TODO: Implement render() method.
        return json_encode(array($this->text));
    }
}