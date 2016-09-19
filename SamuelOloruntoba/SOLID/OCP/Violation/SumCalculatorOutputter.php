<?php

namespace SamuelOloruntoba\SOLID\OCP\Violation;

class SumCalculatorOutputter
{
    protected $areas;

    public function __construct($areas = array())
    {
        $this->areas = $areas;
    }

    public function html()
    {
        return implode('', array(
            '<h1>',
                'Sum of the areas of provided shapes: ',
                $this->areas->sum(),
            '</h1>',
        ));
    }

    public function json()
    {
        // code...
    }

    public function haml()
    {
        // code...
    }

    public function jade()
    {
        // code...
    }
}
