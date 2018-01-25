<?php
/**
 * Created by Kevin181.
 * User: hp
 * Date: 2018/1/25
 * Time: 20:11
 */
namespace DesignPattern\Creational\AbstractFactory;

abstract class Text
{
    /**
     * @var string
     */
    protected $text;
    public function __construct(String $text)
    {
        $this->text = $text;
    }

    abstract public function render();
}