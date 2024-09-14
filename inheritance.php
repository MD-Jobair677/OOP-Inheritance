<?php


class Shape {
    
    public function calculateArea() {
        return 0;
    }
}

// Circle class inherits Shape
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    //  calculateArea method for Circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2); // πr²
    }
}


class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    //  calculateArea method for Rectangle
    public function calculateArea() {
        return $this->width * $this->height;
    }
}


$circle = new Circle(5); 
$rectangle = new Rectangle(4, 6); 

echo "Area of the Circle: " . $circle->calculateArea() . "\n"; 
echo "Area of the Rectangle: " . $rectangle->calculateArea() . "\n"; 
?>
















