<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/2
 * Time: 20:32
 */
namespace DesignPattern\Behavioral\Mediator;

class Mediator implements MediatorInterface
{
    private $client;

    private $server;

    private $database;

    public function __construct(Subsystem\Client $client, Subsystem\Server $server, Subsystem\Database $database)
    {
        $this->client = $client;
        $this->server = $server;
        $this->database = $database;

        $this->client->setMediator($this);
        $this->server->setMediator($this);
        $this->database->setMediator($this);
    }

    public function makeRequest()
    {
        // TODO: Implement makeRequest() method.
        $this->server->process();
    }

    public function sendResponse($content)
    {
        // TODO: Implement sendResponse() method.
        $this->client->output($content);
    }

    public function queryDb()
    {
        // TODO: Implement queryDb() method.
        $this->database->getData();
    }
}