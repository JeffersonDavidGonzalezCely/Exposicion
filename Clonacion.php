<?php
// //CLONACION DE OBJETOS
class ElBicho
{
    static $BalonesOro = 4;
    public $Balones;

    public function __construct() {
        $this->instance = ++self::$BalonesOro;
    }

    public function __clone() {
        $this->instance = ++self::$BalonesOro;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // Forzamos la copia de this->object, si no
        // hará referencia al mismo objeto.
        $this->object1 = clone $this->object1;
    }
}

$obj = new ElBicho();

$obj->object1 = new MyCloneable();
$obj->object2 = new MyCloneable();

$obj2 = clone $obj;


print("Objeto Original:</br>");
print_r($obj);
echo "</br>";
print("Objeto Clonado:</br>");
print_r($obj2);


?>