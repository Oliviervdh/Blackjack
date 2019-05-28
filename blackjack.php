<?php

class blackjack
{ // make an object from your class and then call your method on your object  object "->" Hit

    public function __construct(){
        // this -> score = score "score should be used to count all the scores from the different functions hit, stand, surrender. that's why we use construct.
        // put your score into $_SESSION so you can save the current score. If you don't put it into $_SESSION then you will just get a new rand number
    }


    public function Hit(){
        $random = rand(1,11);
        echo $random;

    }

    public function stand(){


    }

    public function surrender(){


    }


}

$person = new blackjack();

echo $person -> Hit();




















?>