<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/5
 * Time: 21:31
 */
namespace DesignPattern\Structural\Decorator;

abstract class RenderDecorator implements RenderableInterface
{
    /**
     * @var RenderableInterface
     */
    protected $wrapped;

    public function __construct(RenderableInterface $renderer)
    {
        $this->wrapped = $renderer;
    }
}