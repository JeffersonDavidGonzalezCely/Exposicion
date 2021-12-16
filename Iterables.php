<?php
//Iterables

class MiClase
{
    public $var1 = 'valor 1';
    public $var2 = 'valor 2';
    public $var3 = 'valor 3';

    protected $protected = 'variable protegida';
    private   $private   = 'variable privada';
    
    function iterateVisible() {
       echo "MiClase - > iterateVisible:</br> </br>";
       echo "Forma en la que se puede llamar una función que esta dentro de una clase.</br></br>";
       foreach ($this as $clave => $valor) {
           print "$clave => $valor</br></br>";
       }
    }
}

$clase = new MiClase();

foreach($clase as $clave => $valor) {
    print "$clave => $valor</br> </br>";
}
echo "</br> ";


$clase->iterateVisible();



?>