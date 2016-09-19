<?php

namespace SamuelOloruntoba\SOLID\ISP\Solution;

class Circle implements ShapeInterface, ManageShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculate()
    {
        return $this->area();
    }
}
