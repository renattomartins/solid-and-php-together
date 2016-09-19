<?php
namespace SamuelOloruntoba\SOLID\SRP\Violation;

require_once 'Circle.php';
require_once 'Square.php';
require_once 'AreaCalculator.php';

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6),
);

$areas = new AreaCalculator($shapes);

echo $areas->output();
