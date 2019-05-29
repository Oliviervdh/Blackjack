<?php
session_start();


class blackjack{
    public $score = 0;
    public $total_points = 0;


    public function hit(){
        $this->score += rand(1,11);

    }

    public function stand(){
        $this->total_points = $this->score;

    }

    public function surrender(){
        $this->score=0;
        $this->total_points=0;

    }


}

//$person = new blackjack();
//
//echo $person -> Hit();
//echo "<br>";
//echo $person -> stand();
//echo "<br>";
//echo $person -> surrender();

?>