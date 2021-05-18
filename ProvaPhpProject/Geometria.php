<?php


abstract class Figura
{
    protected $coordX=0;
    protected $coordY=0;

    protected abstract function calcularArea(): float;

}

class Quadrat extends Figura{

    protected $costat;

    public function getCostat():int{
        return $this->costat;
    }

    public final function setCostat(int $costat):self
    {
        $this->costat=$costat;
        return $this;
    }

    public function calcularArea(): float
    {
        return $this->costat*$this->costat;
        // TODO: Implement calcularArea() method.
    }
}

class Rectangle extends Quadrat{

    protected $ample=0;


    public function setAmple(int $ample):self
    {
        $this->ample=$ample;
        return $this;
    }

    public function calcularArea(): float
    {
        return $this->ample*$this->costat;
        // TODO: Implement calcularArea() method.
    }
}

interface IFigura{


    public function calcularArea():float;


}

interface IFiguraBis{
    const PI=3.1415927;

    function calcularAreaBis();


}

class Cercle extends Figura implements IFiguraBis{

    private $radi=1.0;

    public function __construct($radi=null){
        $this->radi=$radi;
    }

    public function calcularArea(): float
    {
        return 2*$this->radi*pi();
        // TODO: Implement calcularArea() method.
    }

    function calcularAreaBis()
    {
        return 2*$this->radi*IFiguraBis::PI;
        // TODO: Implement calcularAreaBis() method.
    }
}

class CercleBis extends Figura implements IFigura, IFiguraBis{

    const PII=3.1415927;

    private $radi=1.0;

    public function __construct($radi=null){
        $this->radi=$radi;
    }


    public function calcularArea(): float
    {
        // TODO: Implement calcularArea() method.
    }

    function calcularAreaBis()
    {
        // TODO: Implement calcularAreaBis() method.
    }
}

interface Interficie1 extends IFigura, IFiguraBis {

    function metode($param);
}


$fig1=new Quadrat();

$fig1->setCostat(5);

echo $fig1->calcularArea();
echo "<br />";

$fig2=new Rectangle();

$fig2->setCostat(5)->setAmple(6);

echo $fig2->calcularArea();
echo "<br />";

$fig3=new Cercle(1);
echo $fig3->calcularArea();
echo $fig3->calcularAreaBis();
echo "<br />";

