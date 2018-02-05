<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/5
 * Time: 21:35
 */
namespace DesignPattern\Structural\Decorator;

class JsonRenderer extends RenderDecorator
{
    public function renderData()
    {
        // TODO: Implement renderData() method.
        return json_encode($this->wrapped->renderData());
    }
}