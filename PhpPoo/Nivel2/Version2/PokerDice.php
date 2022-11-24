<?php
class PokerDice{
    //atributos
    public static $array = ["As", "K", "Q", "J", "7", "8"];
    public static $throws; 

    //constructor

    //metodos generales
    public function throw(){
        $num = mt_rand(0 , 5);
        self :: $throws++;
        return $num;
    }

    public function shapeName($x){
        $figura;
        $figura = self :: $array[$x];
        return $figura;
    }

    public function getTotalThrows(){
        return self :: $throws;
    }
}
?>