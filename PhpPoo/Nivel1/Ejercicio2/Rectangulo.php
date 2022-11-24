<?php
class Rectangulo extends Shape {
    //atributos
    //contructor
    //metodos generales
    public function area(){
        $area = $this -> alto * $this -> ancho;
        return "El area del rectangulo es $area m2";
    }
}
?>