<?php
class Employe {
    //atributos
     public $nombre;
     public $sueldo;

    //"constructor"
    public function inicializar($nombre,$sueldo){
        $this -> nombre = $nombre;
        $this -> sueldo = $sueldo;
    }

    //metodos generales
    public function print(){
        $resp = "";
        if ($this -> sueldo > 6000) {
            $resp = $this -> nombre . " debe pagar impustos.";
        }else {
            $resp = $this -> nombre . " no debe pagar impustos.";
        }
        echo $resp;
    }

   
}
$empleado = new Employe();
$empleado -> inicializar("Pedro",7000);
$empleado -> print();
?>