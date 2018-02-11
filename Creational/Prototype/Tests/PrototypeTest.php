<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/11
 * Time: 21:22
 */
namespace DesignPattern\Creational\Prototype\Tests;

use Monolog\TestCase;

use DesignPattern\Creational\Prototype\BarBookPrototype;
use DesignPattern\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase{
    public function testCanGetBook()
    {
        $fooBook = new FooBookPrototype();
        $barBook = new BarBookPrototype();

        for ($i=0; $i<10; $i++) {
            $book = clone $fooBook;
            $book->setTitle('Foo Book No'.$i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i=0; $i<10; $i++) {
            $book = clone $barBook;
            $book->setTitle('Bar Book No'.$i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}