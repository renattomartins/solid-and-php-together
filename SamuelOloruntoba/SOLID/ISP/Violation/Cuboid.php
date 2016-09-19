<?php

namespace SamuelOloruntoba\SOLID\ISP\Violation;

class Cuboid implements ShapeInterface
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }

    public function volume()
    {
        return pow($this->length, 3);
    }
}
