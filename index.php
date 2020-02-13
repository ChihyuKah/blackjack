<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


class blackjack {

    //properties
    public $hit = "" ;
    public $stand;
    public $surrender;

    // methods aka functions

    //getting new cards
    public function newCard() {

        return $this->hit = rand(1,11);
    }

    public  function storeSes(){

    }
}

$newPlayer = new blackjack();

echo $newPlayer->newCard();
