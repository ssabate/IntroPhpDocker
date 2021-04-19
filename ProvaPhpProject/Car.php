<?php


// Declare the class
class Car {

    // properties
    public $comp = null;
    public $color = "beige";
    public $hasSunRoof = true;

    // method that says hello
    public function hello():string
    {
        return "beep";
    }
}

// Create an instance
$bmw = new Car ();
$mercedes = new Car ();
$seat = new Car();

echo $seat->comp;
echo "\n";

// Get the values
echo $bmw -> color; // beige
echo "\n";
echo $mercedes -> color; // beige
echo "\n";

// Set the values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

// Get the values again
echo $bmw -> color; // blue
echo "<br />";
echo $mercedes -> color; // beige
echo "<br />";
echo $bmw -> comp; // BMW
echo "<br />";
echo $mercedes -> comp; // Mercedes Benz
echo "<hr />";

// Use the methods to get a beep
echo $bmw -> hello(); // beep
echo "<br />";
echo $mercedes -> hello(); // beep