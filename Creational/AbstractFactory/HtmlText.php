<?php
/**
 * Created by Kevin181.
 * Date: 2018/1/25
 * Time: 20:15
 */
namespace DesignPattern\Creational\AbstractFactory;

class HtmlText extends Text
{
    public function render()
    {
        // TODO: Implement render() method.
        return '<p>'.$this->text.'</p>';
    }
}