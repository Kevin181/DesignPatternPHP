<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/2
 * Time: 20:07
 */
namespace DesignPattern\Behavioral\Mediator\Subsystem;

use DesignPattern\Behavioral\Mediator\Colleague;

/**
 * Client is a client that sends requests and gets the response.
 * @package DesignPattern\Behavioral\Mediator\Subsystem
 */
class Client extends Colleague
{
    /**
     * Make request that send to server.
     */
    public function request()
    {
        $this->mediator->makeRequest();
    }

    /**
     * Output the response.
     * @param String $content
     */
    public function output(String $content)
    {
        echo $content;
    }
}