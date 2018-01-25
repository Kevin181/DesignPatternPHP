<?php
/**
 * Created by Kevin181.
 * Date: 2018/1/25
 * Time: 20:11
 */
namespace DesignPattern\Creational\AbstractFactory;

class JsonFactory extends AbstractFactory
{
    public function createText(string $content)
    {
        // TODO: Implement createText() method.
        return new JsonText($content);
    }
}