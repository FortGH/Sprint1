<?php
class Triangulo extends Shape {
    //atributos
    //contructor
    //metodos generales
    public function area(){
        $area = ($this -> alto * $this -> ancho) / 2;
        return "El area del triangulo es $area m2";
    }
}
?>