<?php

namespace SamuelOloruntoba\SOLID\ISP\Violation;

class Square implements ShapeInterface
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

    // ISP Violation
    public function volume()
    {
        // Do nothing!
    }
}
