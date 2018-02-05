<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/5
 * Time: 21:44
 */
namespace DesignPattern\Structural\Decorator\Tests;

use DesignPattern\Structural\Decorator\RenderableInterface;
use DesignPattern\Structural\Decorator\JsonRenderer;
use DesignPattern\Structural\Decorator\XmlRenderer;
use DesignPattern\Structural\Decorator\Webservice;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /**
     * @var Webservice
     */
    protected $service;

    public function setUp()
    {
        $this->service = new Webservice('webservice');
    }

    public function testWebserviceInstance()
    {
        $this->assertInstanceOf(RenderableInterface::class, $this->service);
    }

    public function testJsonRenderer()
    {
        $json = new JsonRenderer($this->service);

        $this->assertEquals('webservice', $json->renderData());
    }

    public function testXmlRenderer()
    {
        $xml = new XmlRenderer($this->service);

        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>webservice</content>', $xml->renderData());
    }
}