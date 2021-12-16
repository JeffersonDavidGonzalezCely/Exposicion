<?php


//COMPARACION DE OBJETOS
class ComparacionObjetos{
    public static function booleanoAString($bool)
    {
        if ($bool === false) {
            printf( 'FALSO');
        } else {
            echo 'VERDADERO';
        }
    }
}
$nuevoObjeto = new ComparacionObjetos();

$nuevoObjeto -> booleanoAString(true);

?>