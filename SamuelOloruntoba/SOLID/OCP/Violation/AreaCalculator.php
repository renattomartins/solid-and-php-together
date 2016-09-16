<?php

namespace SamuelOloruntoba\SOLID\OCP\Violation;

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    // Violation:
    // If we wanted the sum method to be able to sum the areas of more shapes,
    // we would have to add more if/else blocks and that goes against the
    // Open-closed principle.
    public function sum()
    {
        foreach ($this->shapes as $shape) {
            if (is_a($shape, 'Square')) {
                $area[] = pow($shape->length, 2);
            } elseif (is_a($shape, 'Circle')) {
                $area[] = pi() * pow($shape->radius, 2);
            }
        }

        return array_sum($area);
    }
}
