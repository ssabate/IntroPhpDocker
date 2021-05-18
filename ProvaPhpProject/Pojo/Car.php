<?php
namespace App\Pojo;

// Declare the class
class Car {

    //static properties
    public static $durada=0;

    public static function modDurada($inc){
        self::$durada+=$inc;

    }

    // properties
    public $array=array(1,2,3,4, "Toyota");
    public $comp = null;
    public $color = "beige";
    public $hasSunRoof = true;
    public $tank;
    private $model;
    public function __construct($color=null, $tank=null)
    {
        if($color) $this->color=$color;
        if($tank) $this->tank=$tank;
        print "In constructor\n";
        //foreach($this->array as $v) echo $v;
    }

    function __destruct(){

        echo "<br>S'ha mort l'objecte ".$this->comp.$this->model."</br>";
    }

    /**
     * @return null
     */
    public function getComp()
    {
        return $this->comp;
    }

    /**
     * @param null $comp
     */
    public function setComp($comp): Car
    {
        $marquesConegudes = array("Nissan", "Toyota", "Suzuki", "Seat");

        if(in_array($comp, $marquesConegudes))
            $this->comp=$comp;
        else $this->comp = "Marca desconeguda";

        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return bool
     */
    public function isHasSunRoof(): bool
    {
        return $this->hasSunRoof;
    }

    /**
     * @param bool $hasSunRoof
     */
    public function setHasSunRoof(bool $hasSunRoof): void
    {
        $this->hasSunRoof = $hasSunRoof;
    }

    /**
     * @return mixed
     */
    public function getTank()
    {
        return $this->tank;
    }

    /**
     * @param mixed $tank
     */
    public function setTank($tank): void
    {
        $this->tank = $tank;
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
//
//// Create an instance
//$bmw = new Car ('');
//$mercedes = new Car ('');
//$seat = new Car('');
//
//echo $seat->comp;
//echo "\n";
//
//// Get the values
//echo $bmw -> color; // beige
//echo "\n";
//echo $mercedes -> color; // beige
//echo "\n";
//
//// Set the values
//$bmw -> color = 'blue';
//$bmw -> comp = "BMW";
//$mercedes -> comp = "Mercedes Benz";
//
//// Get the values again
//echo $bmw -> color; // blue
//echo "<br />";
//echo $mercedes -> color; // beige
//echo "<br />";
//echo $bmw -> comp; // BMW
//echo "<br />";
//echo $mercedes -> comp; // Mercedes Benz
//echo "<hr />";
//
//// Use the methods to get a beep
//echo $bmw -> hello(); // beep
//echo "<br />";
//echo $mercedes -> hello(); // beep
//
//$mercedes ->tank = 'hjjhj';
////$mercedes ->ride(1000);
////$mercedes->fill('ddd');
//
//echo "<br />";
////echo 'Fuel mercedes:'.$mercedes->tank;
//
//echo "<br />";
////echo $mercedes->fill(90)->ride(10000)->tank;
//
//echo "<br />";
//echo $mercedes->setModel('BMW')->getModel();
//
$ibiza = new Car(null,56);
$ibiza->setComp("Seat");
echo $ibiza->getComp();
//
//echo "<br />";
//Car::$durada++;
//Car::modDurada(25);
//echo Car::$durada;
//
//class Utility{
//
//    //static properties
//    public static $durada=0;
//
//    public static function modDurada(int $inc){
//        if(is_int($inc)){
//            self::$durada+=$inc;
//            echo "dins";
//        }
//
//    }
//
//}
//
//echo "<br />";
//Utility::$durada++;
//Utility::modDurada(25.10);
//echo Utility::$durada;
//
//class Utilis {
//    // The method uses PHP's header function to redirect the user.
//    static public function redirect($url)
//    {
//        header("Location: $url");
//        exit;
//    }
//}

#Utilis::redirect("http://www.phpenthusiast.com");

foreach($ibiza->array as $v)
    echo $v."---";

array_push($ibiza->array, "Otro");

print_r(array_chunk($ibiza->array, 2));

array_pop($ibiza->array);

print(array_chunk($ibiza->array, 2));

print_r(array_chunk($ibiza->array, 2));
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];

//class Filla extends Car{
//
//}