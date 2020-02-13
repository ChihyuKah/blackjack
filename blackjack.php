<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class blackjack {

    //properties

    public $score="";

    // methods aka functions
    public function player(){

    }

    public function dealer(){

    }

    public function hit() {

    }
    public function stand(){

    }
    public function surrender(){

    }

    //getting new cards
    public function newCard() {
//        $randNum = rand(1,11);
        return rand(1,11);

    }

    public  function storeSes(){

    }
}


