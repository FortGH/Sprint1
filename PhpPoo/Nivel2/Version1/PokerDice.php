<?php
class PokerDice{
    //atributos
    public static $array = ["As", "K", "Q", "J", "7", "8"];
    public $throws; 

    //constructor
    public function __construct(){
        $this -> throws = 0;
    }

    //metodos generales
    public function throw(){
        $num = mt_rand(0 , 5);
        $this -> throws++;
        return $num;
    }

    public function shapeName($x){
        $figura;
        $figura = self::$array[$x];
        return $figura;
    }

    public function getThrows(){
        return $this -> throws;
    }
}
?>