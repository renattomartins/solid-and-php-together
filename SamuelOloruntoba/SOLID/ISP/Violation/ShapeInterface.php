<?php

namespace SamuelOloruntoba\SOLID\ISP\Violation;

// Violation
// Any shape we create must implement the volume method, but we know that squares
// are flat shapes and that they do not have volumes, so this interface would
// force the Square class to implement a method that it has no use of.
// ISP says no to this.
interface ShapeInterface
{
    public function area();
    public function volume();
}
