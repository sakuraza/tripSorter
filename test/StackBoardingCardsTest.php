<?php 

use PHPUnit\Framework\TestCase;

class StackBoardingCardsTest extends TestCase{
    
    protected $array;

    protected function setUp(): void
    {
        $this->array = array(
            array("departure" => "Madrid", "arrival" => "Barcelona", "sit" => "Sit in seat 45B", "transport" => "train", "number" => "78A"),
            array("departure" => "Barcelona", "arrival" => "Gerona Airport", "sit" => "No seat assignment", "transport" => "airport bus", "number" => ""),
            array("departure" => "Gerona Airport", "arrival" => "Stockholm", "sit" => "seat 3A", "transport" => "flight", "Gate"=> "45B", "number" => "78ASK455", "Baggage drop ticket counter" => "344"),
            array("departure" => "Stockholm", "arrival" => "New York JFK", "sit" => "seat 7B", "transport" => "flight", "Gate"=> "22", "number" => "SK22", "Baggage drop ticket counter"=>"Baggage will we automatically transferred from your last leg")
        );
        $this->arrayOne = array(
            array("departure" => "Madrid", "arrival" => "Barcelona", "sit" => "Sit in seat 45B", "transport" => "train", "number" => "78A"),
            array("departure" => "Barcelona", "arrival" => "Gerona Airport", "sit" => "No seat assignment", "transport" => "airport bus", "number" => ""),
            array("departure" => "Gerona Airport", "arrival" => "Stockholm", "sit" => "seat 3A", "transport" => "flight", "Gate"=> "45B", "number" => "78ASK455", "Baggage drop ticket counter" => "344"),
            array("departure" => "Stockholm", "arrival" => "New York JFK", "sit" => "seat 7B", "transport" => "flight", "Gate"=> "22", "number" => "SK22", "Baggage drop ticket counter"=>"Baggage will we automatically transferred from your last leg")
        );
        //liste désordonnée
        $this->arrayTwo = array(
            array("departure" => "Madrid", "arrival" => "Barcelona", "sit" => "Sit in seat 45B", "transport" => "train", "number" => "78A"),
            array("departure" => "Stockholm", "arrival" => "New York JFK", "sit" => "seat 7B", "transport" => "flight", "Gate"=> "22", "number" => "SK22", "Baggage drop ticket counter"=>"Baggage will we automatically transferred from your last leg"),
            array("departure" => "Gerona Airport", "arrival" => "Stockholm", "sit" => "seat 3A", "transport" => "flight", "Gate"=> "45B", "number" => "78ASK455", "Baggage drop ticket counter" => "344"),
            array("departure" => "Barcelona", "arrival" => "Gerona Airport", "sit" => "No seat assignment", "transport" => "airport bus", "number" => ""),
            
        );
        //liste désordonnée avec ville de départ et ville d'arrivée pas à leurs position
        $this->arrayThree = array(
            array("departure" => "Stockholm", "arrival" => "New York JFK", "sit" => "seat 7B", "transport" => "flight", "Gate"=> "22", "number" => "SK22", "Baggage drop ticket counter"=>"Baggage will we automatically transferred from your last leg"),
            array("departure" => "Madrid", "arrival" => "Barcelona", "sit" => "Sit in seat 45B", "transport" => "train", "number" => "78A"),
            array("departure" => "Gerona Airport", "arrival" => "Stockholm", "sit" => "seat 3A", "transport" => "flight", "Gate"=> "45B", "number" => "78ASK455", "Baggage drop ticket counter" => "344"),
            array("departure" => "Barcelona", "arrival" => "Gerona Airport", "sit" => "No seat assignment", "transport" => "airport bus", "number" => ""),
        );
        //liste désordonnée avec ville de départ et ville d'arrivée pas à leurs position
        $this->arrayFour = array(
            array("departure" => "Gerona Airport", "arrival" => "Stockholm", "sit" => "seat 3A", "transport" => "flight", "Gate"=> "45B", "number" => "78ASK455", "Baggage drop ticket counter" => "344"),
            array("departure" => "Stockholm", "arrival" => "New York JFK", "sit" => "seat 7B", "transport" => "flight", "Gate"=> "22", "number" => "SK22", "Baggage drop ticket counter"=>"Baggage will we automatically transferred from your last leg"),
            array("departure" => "Madrid", "arrival" => "Barcelona", "sit" => "Sit in seat 45B", "transport" => "train", "number" => "78A"),
            array("departure" => "Barcelona", "arrival" => "Gerona Airport", "sit" => "No seat assignment", "transport" => "airport bus", "number" => "")
        );
        //liste désordonnée avec ville de départ pas à sa position
        $this->arrayFive = array(
            array("departure" => "Gerona Airport", "arrival" => "Stockholm", "sit" => "seat 3A", "transport" => "flight", "Gate"=> "45B", "number" => "78ASK455", "Baggage drop ticket counter" => "344"),
            array("departure" => "Barcelona", "arrival" => "Gerona Airport", "sit" => "No seat assignment", "transport" => "airport bus", "number" => ""),
            array("departure" => "Madrid", "arrival" => "Barcelona", "sit" => "Sit in seat 45B", "transport" => "train", "number" => "78A"),
            array("departure" => "Stockholm", "arrival" => "New York JFK", "sit" => "seat 7B", "transport" => "flight", "Gate"=> "22", "number" => "SK22", "Baggage drop ticket counter"=>"Baggage will we automatically transferred from your last leg")
        );
        //liste désordonnée avec ville de d'arrivé pas à sa position
        $this->arraySix = array(
            array("departure" => "Madrid", "arrival" => "Barcelona", "sit" => "Sit in seat 45B", "transport" => "train", "number" => "78A"),
            array("departure" => "Stockholm", "arrival" => "New York JFK", "sit" => "seat 7B", "transport" => "flight", "Gate"=> "22", "number" => "SK22", "Baggage drop ticket counter"=>"Baggage will we automatically transferred from your last leg"),
            array("departure" => "Gerona Airport", "arrival" => "Stockholm", "sit" => "seat 3A", "transport" => "flight", "Gate"=> "45B", "number" => "78ASK455", "Baggage drop ticket counter" => "344"),
            array("departure" => "Barcelona", "arrival" => "Gerona Airport", "sit" => "No seat assignment", "transport" => "airport bus", "number" => "")
            
            
        );
    }
    /**
     * Test de la function de tri sur une pile de carte d'embarquement déjà ordonnée
     *
     */
    public function testMethodSortStackBoardingCardOne(){
        
        $stackBoardingCard = $this->arrayOne;

        $boardingCard = new StackBoardingCards($stackBoardingCard);
        $stackBoardingCardSorted = $boardingCard->sortStackBoardingCard();
       
        for ($i=0; $i < count($stackBoardingCard); $i++) { 
            $this->assertEquals($this->array[$i], $stackBoardingCardSorted[$i]);
        }
    }
    /**
     * Test de la function de tri sur une pile de carte d'embarquement non ordonnée
     *
     */
    public function testMethodSortStackBoardingCardTwo(){

        $stackBoardingCard = $this->arrayTwo;

        $boardingCard = new StackBoardingCards($stackBoardingCard);
        $stackBoardingCardSorted = $boardingCard->sortStackBoardingCard();
       
        for ($i=0; $i < count($stackBoardingCard); $i++) { 
            $this->assertEquals($this->array[$i], $stackBoardingCardSorted[$i]);
        }
    }
    /**
     * Test de la function de tri sur une pile de carte d'embarquement non ordonnée
     * Avec ville de départ et ville d'arrivée pas à leurs position
     */
    public function testMethodSortStackBoardingCardThree(){
        $stackBoardingCard = $this->arrayThree;

        $boardingCard = new StackBoardingCards($stackBoardingCard);
        $stackBoardingCardSorted = $boardingCard->sortStackBoardingCard();
       
        for ($i=0; $i < count($stackBoardingCard); $i++) { 
            $this->assertEquals($this->array[$i], $stackBoardingCardSorted[$i]);
        }
    }
    /**
     * Test de la function de tri sur une pile de carte d'embarquement non ordonnée
     * Avec ville de départ et ville d'arrivée pas à leurs position
     */
    public function testMethodSortStackBoardingCardFour(){
        $stackBoardingCard = $this->arrayFour;

        $boardingCard = new StackBoardingCards($stackBoardingCard);
        $stackBoardingCardSorted = $boardingCard->sortStackBoardingCard();
       
        for ($i=0; $i < count($stackBoardingCard); $i++) { 
            $this->assertEquals($this->array[$i], $stackBoardingCardSorted[$i]);
        }
    }
    /**
     * Test de la function de tri sur une pile de carte d'embarquement non ordonnée
     * Avec ville de départ pas à sa position
     */
    public function testMethodSortStackBoardingCardFive(){
        $stackBoardingCard = $this->arrayFive;

        $boardingCard = new StackBoardingCards($stackBoardingCard);
        $stackBoardingCardSorted = $boardingCard->sortStackBoardingCard();
       
        for ($i=0; $i < count($stackBoardingCard); $i++) { 
            $this->assertEquals($this->array[$i], $stackBoardingCardSorted[$i]);
        }
    }
    /**
     * Test de la function de tri sur une pile de carte d'embarquement non ordonnée
     * Avec ville de d'arrivée pas à sa position
     */
    public function testMethodSortStackBoardingCardSix(){
        $stackBoardingCard = $this->arraySix;

        $boardingCard = new StackBoardingCards($stackBoardingCard);
        $stackBoardingCardSorted = $boardingCard->sortStackBoardingCard();
       
        for ($i=0; $i < count($stackBoardingCard); $i++) { 
            $this->assertEquals($this->array[$i], $stackBoardingCardSorted[$i]);
        }
    }
}