<?php
class Shape {
    //atributos
    protected $alto;
    protected $ancho;

    //constructor
    public function __construct($alto, $ancho) {
        $this -> alto = $alto;
        $this -> ancho = $ancho;
    }
}

class Triangulo extends Shape {
    //atributos
    //contructor
    public function __construct($alto, $ancho){
        parent::__construct($alto, $ancho);
    }
    //metodos generales
    public function area(){
        $area = ($this -> alto * $this -> ancho) / 2;
        echo "El area del triangulo es $area m2";
    }
}

class Rectangulo extends Shape {
    //atributos
    //contructor
    public function __construct($alto, $ancho){
        parent::__construct($alto, $ancho);
    }
    //metodos generales
    public function area(){
        $area = $this -> alto * $this -> ancho;
        echo "El area del rectangulo es $area m2";
    }
}

$rectangulo = new Rectangulo(5,6);
$rectangulo -> area();

echo '</br>';

$triangulo = new Triangulo(5,6);
$triangulo -> area();
?>