<?php

namespace App;

//spl_autoload_register(function ($class_name) {
//    include $class_name . '.php';
//});

use App\Pojo\Car;

echo "Hello from the docker container<br />";

echo "<a href='Pojo/Car.php'>My very first php class!</a>";

class Prova
{
    private $c = null;

    function __construct(){
        $this->c=new Car();

    }
}

