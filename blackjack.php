<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);



class blackjack {

    //properties

    public $score = 0;

    // methods aka functions


    //getting new cards
    public function startTheGame() {

        $totalPlayerAmount =[];
        $randNum1 = rand(1,11);
        $randNum2 = rand(1,11);

        array_push($totalPlayerAmount,$randNum1,$randNum2);

        $sum = array_sum($totalPlayerAmount);
        $sumSess = $_SESSION["amount"] = $sum;
        echo($sum)."<br>";
    }
    public function hit() {
        $totalAmount = 0;
        $randHitArr = [];
        $prevAmount = $_SESSION["amount"] ;
        $randHit = rand(1,11);
        $prevAmount = $_SESSION["amount"] ;
        array_push($randHitArr,$randHit,$prevAmount);
        $sumHit = array_sum($randHitArr);
        echo $sumHit."<br>";





    }

    public function player(){

    }

    public function dealer(){

    }


    public function stand(){

    }
    public function surrender(){

    }
//    public function newCard2(){
//        $randNum2 = rand(1,11);
////        return rand(1,11);
//        echo $randNum2;
    //}
}


