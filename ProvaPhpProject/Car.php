<?php


// Declare the class
class Car {

    // properties
    public $comp = null;
    public $color = "beige";
    public $hasSunRoof = true;
    public $tank;
    private $model;
    function __construct()
    {
        print "In constructor\n";
    }


//    public function Car($model){
//        $this->model=$model;
//
//    }


    public function setModel($model){
        //validate that only certain car models are assigned to the $carModel property
        $allowedModels = array("Mercedes benz","BMW", 3);

        if(in_array($model,$allowedModels))
        {
            $this -> model = $model;
        }
        else
        {
            $this -> model = "not in our list of models.";
        }
        return $this;
    }

    public function getModel(){
        return $this->model;


    }

    // method that says hello
    public function hello():string
    {
        return "I am a <i>" . $this -> comp .
            "</i>, and I am <i>" . $this -> color."</i>";
    }


    // Add gallons of fuel to the tank when we fill it.
    public function fill($float)
    {
        $this-> tank += $float;
        return $this;
    }

    // Substract gallons of fuel from the tank as we ride the car.
    public function ride($float)
    {
        $miles = $float;
        $gallons = $miles/50;
        $this-> tank -= $gallons;
        return $this;
    }
}

// Create an instance
$bmw = new Car ('');
$mercedes = new Car ('');
$seat = new Car('');

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

$mercedes ->tank = 'hjjhj';
//$mercedes ->ride(1000);
$mercedes->fill('ddd');

echo "<br />";
echo $mercedes->tank;

echo "<br />";
echo $mercedes->fill(90)->ride(10000)->tank;

echo "<br />";
echo $mercedes->setModel('BMW')->getModel();