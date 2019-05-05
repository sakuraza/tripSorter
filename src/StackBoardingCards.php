<?php
class StackBoardingCards{
    protected $stackBoardingCards = array();

    function __construct($stackBoardingCards)
    {
        $this->stackBoardingCards = $stackBoardingCards;
    }
    /**
     * Return a stack of boarding card sorted
     *
     * @param array $stackBoardingCard
     * @return array
     */
    public function sortStackBoardingCard(){
        $stackBoardingCard = $this->stackBoardingCards;
        $stackBoardingCardSorted = array();
        array_push($stackBoardingCardSorted, $stackBoardingCard[0]);
        
        $rep=true;
        $j=0;   //indice $stackBoardingCardSorted
        //Boucle jusqu'à la ville d'arrivée
        while ($rep==true) {
            $rep=false;
            foreach ($stackBoardingCard as $boardingCard) {
                if ($stackBoardingCardSorted[$j]["arrival"]==$boardingCard["departure"]) {
                    array_push($stackBoardingCardSorted, $boardingCard);
                    $j++;
                    $rep=true;
                }
            }
        }
        $rep=true;
        //Boucle jusqu'à la ville de départ
        while ($rep==true) {
            $rep=false;
            foreach ($stackBoardingCard as $boardingCard) {
                if ($stackBoardingCardSorted[0]["departure"]==$boardingCard["arrival"]) {
                    array_unshift($stackBoardingCardSorted, $boardingCard);
                    $rep=true;
                }
            }
        }
        $this->stackBoardingCards=$stackBoardingCardSorted;
        return $stackBoardingCardSorted;
    }

    public function readStackBoardingCards()
    {
        foreach ($this->stackBoardingCards as $boardingCard) {
            switch ($boardingCard['transport']) {
                case 'train':
                    echo 'Take '.$boardingCard['transport'].' '.$boardingCard['number'].' from '.$boardingCard['departure'].' to '.$boardingCard['arrival'].'. '.$boardingCard['sit'].'.<br>';
                    break;
                case 'flight':
                    echo 'From '.$boardingCard['departure'].', take '.$boardingCard['transport'].' '.$boardingCard['number'].' to '.$boardingCard['arrival'].'. Gate '.$boardingCard['Gate'].', '.$boardingCard['sit'].'. '.$boardingCard['Baggage drop ticket counter'].'.<br>';
                    break;
                case 'airport bus':
                    echo 'Take the '.$boardingCard['transport'].' from '.$boardingCard['departure'].' to '.$boardingCard['arrival'].'. '.$boardingCard['sit'].'.<br>';
                    break;
            }
        }
        echo 'You have arrived at your final destination.';
    }
}