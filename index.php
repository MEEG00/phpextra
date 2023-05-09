<?php
class Batmancar {
    public $parteAnteriore;
    public $partePosteriore;

    public function __construct(parteAnteriore $_parteAnteriore,partePosteriore $_partePosteriore)
    {
        $this->parteAnteriore = $_parteAnteriore;
        $this->partePosteriore = $_partePosteriore;
    }
    public function tastoAttacca(){
        $this->parteAnteriore->attacca();
    }
    public function tastoDifendi(){
        $this->partePosteriore->difendi();
    }
}
$batman1= new Batmancar(new Razzi, new Scudo);

$batman1->tastoAttacca();

abstract class parteAnteriore{
    abstract public function attacca();
}

class Razzi extends parteAnteriore{
    public function attacca (){
        echo "KABOOM";
    }
}
abstract class partePosteriore{
    abstract public function difendi();
}

class Scudo extends partePosteriore{
    public function difendi (){
        echo "Schiverò anche questa!";
    }
}
