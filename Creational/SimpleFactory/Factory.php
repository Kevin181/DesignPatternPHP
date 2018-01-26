<?php
/**
 * Created by Kevin181
 * Date: 2018/1/26
 * Time: 17:49
 */
namespace DesignPattern\Creational\SimpleFactory;
class Factory
{
    /**
     * Container of types that registered in factory.
     * @var array
     */
    public $types = array(
        'bicycle' => 'Bicycle',
        'car' => 'Car',
    );

    public function create(String $type)
    {
        $type = strtolower($type);
        if (in_array($type, array_keys($this->types))) {
            return new $this->types[$type]();
        }

        return false;
    }
}