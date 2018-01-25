<?php
/**
 * Created by Kevin181.
 * Date: 2018/1/25
 * Time: 20:21
 */
namespace DesignPattern\Creational\AbstractFactory\Tests;

use DesignPattern\Creational\AbstractFactory\HtmlFactory;
use DesignPattern\Creational\AbstractFactory\JsonFactory;
use DesignPattern\Creational\AbstractFactory\HtmlText;
use DesignPattern\Creational\AbstractFactory\JsonText;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTests extends TestCase
{
    /**
     * @var HtmlFactory
     */
    protected $htmlFactory;

    /**
     * @var JsonFactory
     */
    protected $jsonFactory;

    /**
     * @var HtmlText
     */
    protected $htmlText;

    /**
     * @var JsonText
     */
    protected $jsonText;

    public function setUp()
    {
        $this->htmlFactory = new HtmlFactory();
        $this->jsonFactory = new JsonFactory();
    }

    public function testHtmlFactory()
    {
        $this->htmlText = $this->htmlFactory->createText('html');

        //$this->assertInstanceOf(expected value, result/test value);
        $this->assertInstanceOf(HtmlText::class, $this->htmlText);
    }

    public function testJsonFactory()
    {
        $this->jsonText = $this->jsonFactory->createText('json');

        $this->assertInstanceOf(JsonText::class, $this->jsonText);
    }

    public function testHtmlText()
    {
        $this->assertEquals('<p>html</p>', $this->htmlText->render());
    }

    public function testJsonText()
    {
        $this->assertEquals(json_encode(array('json')), $this->jsonText->render());
    }
}