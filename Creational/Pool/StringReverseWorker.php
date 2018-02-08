<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/8
 * Time: 21:12
 */
namespace DesignPattern\Creational\Pool;

class StringReverseWorker
{
    /**
     * @var \DateTime
     */
    private $createAt;

    public function __construct()
    {
        $this->createAt = new \DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}