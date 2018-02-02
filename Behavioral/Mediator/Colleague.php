<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/2
 * Time: 20:12
 */
namespace DesignPattern\Behavioral\Mediator;

abstract class Colleague
{
    /**
     * This ensure no change in subclasses.
     * @var MediatorInterface
     */
    protected $mediator;

    /**
     * Set mediator for class.
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}