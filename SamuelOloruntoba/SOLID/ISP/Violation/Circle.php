<?php

namespace SamuelOloruntoba\SOLID\ISP\Violation;

class Circle implements ShapeInterface
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

    // ISP Violation
    public function volume()
    {
        // Do nothing!
    }
}
