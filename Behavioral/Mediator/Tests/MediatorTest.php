<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/2
 * Time: 20:43
 */
namespace DesignPattern\Behavioral\Mediator\Tests;

use DesignPattern\Behavioral\Mediator\Mediator;
use DesignPattern\Behavioral\Mediator\MediatorInterface;
use DesignPattern\Behavioral\Mediator\Subsystem\Client;
use DesignPattern\Behavioral\Mediator\Subsystem\Server;
use DesignPattern\Behavioral\Mediator\Subsystem\Database;
use PHPUnit\Framework\TestCase;

class Mediator extends TestCase
{
    protected $mediator;

    protected $client;

    protected $server;

    protected $database;

    public function setUp()
    {
        $this->client = new Client();
        $this->server = new Server();
        $this->database = new Database();

        $this->mediator = new Mediator($this->client, $this->server, $this->database);
    }

    public function testMediatorType()
    {
        $this->assertInstanceOf(MediatorInterface::class, $this->mediator);
    }

    public function testMediatorMakeRequest()
    {
        $this->expectOutputString('Hello World');
        // Of course, using $this->server->process(); is the same.
        $this->mediator->makeRequest();
    }

    public function testMediatorSendResponse()
    {
        $this->expectOutputString('Test Data');
        // Of course, using $this->client->output('Test Data'); is the same.
        $this->mediator->sendResponse('Test Data');
    }

    public function testMediatorQueryDb()
    {
        // Of course, using $this->database->getData(); is the same.
        $this->assertEquals('World', $this->mediator->queryDb());
    }
}

