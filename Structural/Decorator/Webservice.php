<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/5
 * Time: 21:41
 */
namespace DesignPattern\Structural\Decorator;

class Webservice implements RenderableInterface
{
    /**
     * @var string
     */
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData()
    {
        // TODO: Implement renderData() method.
        return $this->data;
    }
}