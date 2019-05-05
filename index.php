<?php

require_once __DIR__ . '/vendor/autoload.php';

    $stack = array(
        array("departure" => "Stockholm", "arrival" => "New York JFK", "sit" => "seat 7B", "transport" => "flight", "Gate"=> "22", "number" => "SK22", "Baggage drop ticket counter"=>"Baggage will we automatically transferred from your last leg"),
        array("departure" => "Madrid", "arrival" => "Barcelona", "sit" => "Sit in seat 45B", "transport" => "train", "number" => "78A"),
        array("departure" => "Gerona Airport", "arrival" => "Stockholm", "sit" => "seat 3A", "transport" => "flight", "Gate"=> "45B", "number" => "SK455", "Baggage drop ticket counter" => "Baggage drop at ticket counter 344"),
        array("departure" => "Barcelona", "arrival" => "Gerona Airport", "sit" => "No seat assignment", "transport" => "airport bus", "number" => ""),
    );

    $stackBoardingCards = new StackBoardingCards($stack);
    
    $stackBoardingCards->sortStackBoardingCard();
    $stackBoardingCards->readStackBoardingCards();

    
?>

