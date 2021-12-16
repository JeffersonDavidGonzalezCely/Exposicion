<?php
// // PALABRA CLAVE FINAL
class Padre {
    public function Crear() {
        echo "Se crea un objeto";
    }
    
    public function AsignarleColorOjos() {
        echo "Azules";
    }
 }
 
 class Hija extends Padre {
    public function AsignarleColorOjos() { //NO SE PUEDE SOBREESCRIBIR UN METODO QUE TENGA LA PALABRA FINAL
        echo "Rojos";
    }
 }

 $obj = new Hija;

 $obj -> AsignarleColorOjos();

?>