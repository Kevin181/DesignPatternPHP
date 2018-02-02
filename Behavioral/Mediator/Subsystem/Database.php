<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/2
 * Time: 20:27
 */
namespace DesignPattern\Behavioral\Mediator\Subsystem;

use DesignPattern\Behavioral\Mediator\Colleague;

/**
 * The class of database.
 * @package DesignPattern\Behavioral\Mediator\Subsystem
 */
class Database extends Colleague
{
    /**
     * Get data from database
     * @return string
     */
    public function getData()
    {
        return 'World';
    }
}