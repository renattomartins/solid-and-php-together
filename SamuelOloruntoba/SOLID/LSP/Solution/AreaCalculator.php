<?php

namespace SamuelOloruntoba\SOLID\LSP\Solution;

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            if ($shape instanceof ShapeInterface) {
                $area[] = $shape->area();
                continue;
            }

            throw new AreaCalculatorInvalidShapeException();
        }

        return array_sum($area);
    }
}
