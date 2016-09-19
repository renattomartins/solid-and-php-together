<?php

namespace SamuelOloruntoba\SOLID\ISP\Solution;

class Cuboid implements ShapeInterface, SolidShapeInterface, ManageShapeInterface
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

    public function calculate()
    {
        return $this->area();
    }
}
