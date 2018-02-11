<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/11
 * Time: 21:14
 */
namespace DesignPattern\Creational\Prototype;

abstract class BookPrototype
{
    /**
     * @var string
     */
    protected $title;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}