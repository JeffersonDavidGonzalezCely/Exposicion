<?php
// //ENLACES ESTATICOS EN TIEMPO DE EJECUCION
class ClaseA {
    public static function QuienEs() {
        echo __CLASS__;
    }
    public static function Llamar() {
        self::QuienEs();
    }
}

class ClaseB extends ClaseA {
    public static function QuienEs() {
        echo __CLASS__;
    }
}

ClaseB::Llamar();
?>