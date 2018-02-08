<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/8
 * Time: 21:30
 */
namespace DesignPattern\Creational\Pool\Tests;

use DesignPattern\Creational\Pool\WorkerPool;
use DesignPattern\Creational\Pool\StringReverseWorker;
use PHPUnit\Framework\TestCase;

class WorkerPool extends TestCase
{
    public function testCanGetNewInstanceWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $this->assertInstanceOf(StringReverseWorker::class, $worker1);
        $this->assertInstanceOf(StringReverseWorker::class, $worker2);

        $this->assertCount(2, $pool);
        $this->assertNotSame($worker1, $worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        $this->assertCount(1, $pool);
        $this->assertSame($worker1, $worker2);
    }
}