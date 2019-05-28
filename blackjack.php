<?php
session_start();

class blackjack
{
    public $score;


    public function __construct() {
        // this -> score = score "score should be used to count all the scores from the different functions hit, stand, surrender. that's why we use construct.
        // put your score into $_SESSION so you can save the current score. If you don't put it into $_SESSION then you will just get a new rand number

        if (!$_SESSION['score']) {
            $this->score = 0;
        } else {
            $this->score = $_SESSION['score'];
        }
    }


    public function Hit(){
        $p_random = rand(1,11);
        $_SESSION['score'] = "$p_random";
        // serialise your session
        echo"Your Hit!";
        echo $p_random;
        echo "<br>";
    }

    public function stand(){
        echo "saved score";
        echo $_SESSION['score'];
        echo "<br>";
        $d_random = rand(1,11);
        $_SESSION['dealer'] = "$d_random";
        echo "<br>";
        echo "dealers Hit";
        echo $d_random;
        echo "<br>";
    }

    public function surrender(){
        echo "You surrendered, You lose!";
        echo "<br>";
        echo "<br>";
        echo "Dealer wins!";
        echo "<br>";
        echo "<br>";
        echo "your score :" .$_SESSION['score'];
        echo "<br>";
        echo "<br>";
        echo "Dealers score:" . $_SESSION['dealer'];
    }


}

$person = new blackjack();

echo $person -> Hit();
echo "<br>";
echo $person -> stand();
echo "<br>";
echo $person -> surrender();


?>