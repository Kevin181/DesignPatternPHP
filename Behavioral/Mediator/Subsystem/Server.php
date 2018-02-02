<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/2
 * Time: 20:23
 */
namespace DesignPattern\Behavioral\Mediator\Subsystem;

use DesignPattern\Behavioral\Mediator\Colleague;

/**
 * The class of server.
 * @package DesignPattern\Behavioral\Mediator\Subsystem
 */
class Server extends Colleague
{
    /**
     * Process the request from client.
     */
    public function process()
    {
        $data = $this->mediator->queryDb();
        $this->mediator->sendResponse(sprintf('Hello $s', $data));
    }
}