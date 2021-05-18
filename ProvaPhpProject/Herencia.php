<?php


class Super
{
    public $publicS=0;
    protected $protectedS=0;
    private $privateS=0;

    public function __construct(){
        echo "Hello from class Super<br />";
        $this->protectedS=888;
    }

    public function provaSobreescriptura(){
        return "Hello from super's function!! <br />";
    }

    public final function holaDesDelPare()
    {
        return "Hello from super's function!! <br />";
    }

}

final class Sub extends Super{

    public function __construct(){
        parent::__construct();
        echo "Hello from class Sub<br />";
    }


    public function provaVisibilitat($valor){
        $this->protectedS=$valor;
        $this->publicS=$valor;
        $this->publicS=$valor;
    }

    public function __tostring(){
        return $this->publicS.' '.$this->protectedS;
    }

    public function provaSobreescriptura(): string
    {
        return parent::provaSobreescriptura()."Hello from sub's function!! <br />";
    }

//    public function holaDesDelPare(){
//        return "Hello from super's function!! <br />";
//    }

}

//class Neta extends Sub{
//
//
//}

$filla=new Sub();

echo $filla;

echo "<br />";

echo $filla->provaSobreescriptura();

//echo (parent::$filla)->provaSobreescriptura();