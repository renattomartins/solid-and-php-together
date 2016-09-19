<?php

namespace SamuelOloruntoba\SOLID\LSP\Violation;

class VolumeCalculator extends AreaCalculator
{
    public function __construct($shapes = array())
    {
        parent::__construct($shapes);
    }

    // Violation:
    // If we tried to run an example like index.php, the program does not squawk,
    // but when we call the HTML method on the $output2 object we get an E_NOTICE
    // error informing us of an array to string conversion.
    public function sum()
    {
        $summedData = 2;

        // logic to calculate the volumes and then return and array of output

        return array($summedData);
    }
}
