<?php



class Blackjack{
    public $score = 0; // adds a property to the class blackjack "score".
    public $total_points = 0;

    public function __construct()
    { $this->hit();
        $this->hit();
    }


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


?>