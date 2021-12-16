//Clases anonimas//

<?php

$codi = new Class("CodigoFranklin"){
    private $name;
    public function __construct($name){
        $this->set_name($name);
    }
    public function set_name($name) {
        $this -> name = $name;
    }

public function get_name(){
    return $this->name;
}

};

print "El nombre es : {$codi->get_name()} \n";

exit(1);