<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

session_start();
require "blackjack.php";

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening();
$totalPlayerAmount=[];

$player = new blackjack();


$dealer = new blackjack();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["startgame"])) {

        $player->startTheGame();
    }

    if (isset($_POST["hit"])) {

        $player->hit();


    }
}
//echo ("test").$player->newCard1();


//refresh page button
if (isset($_POST["refresh"])) {
    header("refresh");
    session_destroy();
}

