<?php
abstract class Shape {
    //atributos
    protected $alto;
    protected $ancho;

    //constructor
    public function __construct($alto, $ancho) {
        $this -> alto = $alto;
        $this -> ancho = $ancho;
    }
    //metodos generales
    abstract protected function area();
}
?>