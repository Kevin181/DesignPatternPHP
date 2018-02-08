<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/8
 * Time: 20:41
 */
namespace DesignPattern\Creational\Multiton;

class Multiton
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';

    /**
     * @var array
     */
    private static $multiton = array();

    /**
     * This is private and prevent from creating arbitrary instance.
     */
    private static function __construct()
    {
    }

    /**
     * Get or new&return instance
     * @param string $instanceName
     * @return object
     */
    public function getInstance(string $instanceName)
    {
        if (!isset(self::$multiton[$instanceName])) {
            self::$multiton[$instanceName] = new self();
        }

        return self::$multiton[$instanceName];
    }

    /**
     * Prevent instance from being cloned.
     */
    private function __clone()
    {
    }

    /**
     * Prevent instance from bening unserialized.
     */
    private function __wakeup()
    {
    }
}