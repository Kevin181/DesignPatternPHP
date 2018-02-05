<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/5
 * Time: 21:37
 */
namespace DesignPattern\Structural\Decorator;

class XmlRenderer extends RenderDecorator
{
    public function renderData()
    {
        // TODO: Implement renderData() method.
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));

        return $doc->saveXML();
    }
}