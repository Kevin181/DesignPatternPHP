<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/2
 * Time: 19:59
 */
namespace DesignPattern\Behavioral\Mediator;

/**
 * MediatorInterface is a contract for the Mediator
 * This interface is not mandatory but it is better for Liskov substitution principle concerns.
 */
interface MediatorInterface
{
    /**
     * Send the response
     * @param string $content
     */
    public function sendResponse($content);

    /**
     * Make a request
     */
    public function makeRequest();

    /**
     * Queries the DB
     */
    public function queryDb();
}