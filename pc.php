<?php
class computer {
    public $ram;
    public $cpu;
    public $graphics;
    public $mb;
    public $cases;
    public $ssd;
     
     
     public function __construct($_ram, $_cpu, $_graphics, $_mb, $_cases, $_ssd)
     {
        $this->ram = $_ram;
        $this->cpu = $_cpu;
        $this->graphics = $_graphics;
        $this->mb = $_mb;
        $this->cases = $_cases;
        $this->ssd = $_ssd;
     }
     public function printSpecs(){
        echo "pc specs: \n";
        $this->ram->specs();
        $this->cpu->specs();
        $this->graphics->specs();
        $this->mb->specs();
        $this->cases->specs();
        $this->ssd->specs();
        
     }
}
abstract class Components{
    protected  $brand;
}
class ram extends Components{
    private $memory;
    private $price;

    public function __construct($_price, $_memory, $brand)
    {
        $this->price = $_price;
        $this->memory = $_memory;
        $this->brand = $brand;
    }
    public function specs(){
        echo "ram $this->brand con una memoria di $this->memory gb al prezzo di $this->price euro. \n";
    }
}
class cpu extends Components{
    private $hz;
    private $price;

    public function __construct($_price, $_hz, $brand)
    {
        $this->price = $_price;
        $this->hz = $_hz;
        $this->brand = $brand;
    }
    public function specs(){
        echo "cpu $this->brand con una frequenza di $this->hz hz al prezzo di $this->price euro. \n";
    }
}
class graphics extends Components{
    private $memory;
    private $price;

    public function __construct($_price, $_memory, $brand)
    {
        $this->price = $_price;
        $this->memory = $_memory;
        $this->brand = $brand;
    }
    public function specs(){
        echo "scheda grafica $this->brand con una memoria di $this->memory gb al prezzo di $this->price euro. \n";
    }
}
class mb extends Components{
    private $socket;
    private $price;

    public function __construct($_price, $_socket, $brand)
    {
        $this->price = $_price;
        $this->socket = $_socket;
        $this->brand = $brand;
    }
    public function specs(){
        echo "scheda madre $this->brand con socket $this->socket al prezzo di $this->price euro. \n";
    }
}
class cases extends Components{
    private $model;
    private $price;

    public function __construct($_price, $_model, $brand)
    {
        $this->price = $_price;
        $this->model = $_model;
        $this->brand = $brand;
    }
    public function specs(){
        echo "case $this->brand con modello $this->model al prezzo di $this->price euro. \n";
    }
}
class ssd extends Components{
    private $memory;
    private $price;

    public function __construct($_price, $_memory, $brand)
    {
        $this->price = $_price;
        $this->memory = $_memory;
        $this->brand = $brand;
    }
    public function specs(){
        echo "ssd $this->brand con una memoria di $this->memory al prezzo di $this->price euro. \n";
    }
}

$pc = new computer(new ram(70, 32, "vegeance"), new cpu(250, 144, "AMD"), new graphics(470,12,"NVDIA GEFORCE 3060 RTX"), new mb(170,"AMD", "MSI"), new cases(220, "atx", "msi"), new ssd(220,"2TB", "samsung"));
$pc->printSpecs();