<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/5
 * Time: 21:14
 */
namespace DesignPattern\Structural\DependencyInjection\Tests;

use DesignPattern\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPattern\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $configtion = new DatabaseConfiguration(
            '127.0.0.1',
            3306,
            'root',
            'password'
        );

        $connection = new DatabaseConnection($configtion);

        $this->assertEquals(sprintf(
            '%s:%s@%s:%s',
            $configtion->getHost(),
            $configtion->getPort(),
            $configtion->getUsername(),
            $configtion->getPassword()
        ), $connection->getDsn());
    }
}