<?php
ini_set('display_errors', 'On'); // Shows all errors and warnings.
error_reporting(E_ALL); // Shows all errors and warnings.


require 'blackjack.php'; // first you require Blackjack.php so your session has access to the class "blackjack" and its functions/methods.
session_start(); // here you call the whole session "Which is in theory a massive array with (global super-vars, and anything you put in it).


if (isset($_POST['play'])){ // if you hit "Play blackjack!"you instantiate your class with the objects: "$player - $dealer". (object are instances of classes).
    $player = $_SESSION['player'];
    $dealer = $_SESSION['dealer'];
    unset($_SESSION['player']); // If you hit 'reset' unset the player session, the $player, $dealer to reset the game.
    unset($_SESSION['dealer']);
    $player = new Blackjack();
    $dealer = new Blackjack();
}

if (isset($_POST['hit']) || isset($_POST['stand']) || isset($_POST['surrender'])){
    $player = $_SESSION['player']; // here you declare what you want to take out of the session.
    $dealer = $_SESSION['dealer'];
}

if (isset($_POST['reset'])){
    unset($_SESSION['player']); // If you hit 'reset' unset the player session, the $player, $dealer to reset the game.
        unset($_SESSION['dealer']);
       $player = new Blackjack(); // here you instantiate your class with an object. "$player" (object are instances of classes).
    $dealer = new Blackjack();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>Game</title>
</head>
<body>

<div class="page">


    <div class="container m-3 d-flex justify-content-center">

        <div>
            <form method="POST">
                <input type="submit" name="hit" value="Hit me">
                <input type="submit" name="stand" value="Stand">
                <input type="submit" name="surrender" value="Surrender...">
                <input type="submit" name="reset" value="Reset">
            </form>
            </div>

        <div class="output">
            <h1>Game bord</h1>
            <?php
            if (isset($_POST['hit'])){
                $player->hit();
                echo "Your score: ". $player->score;
                if ($player->score>21){
                    echo " You lost!";
                }
            }

            if (isset($_POST['stand'])) {

                $player->stand();
                $dealer->hit();
                if ($dealer->score < 15) {
                    $dealer->hit();
                }
                if ($dealer->score > 21 AND $player->score <= 21) {

                    echo "Your score: " . $player->total_points;
                    echo "<br>";
                    echo "Dealers score: " . $dealer->score;
                    echo "<br>";
                    echo "You win!";

                } elseif ($player->score <= $dealer->score) {
                    echo "Your score: " . $player->total_points;
                    echo "<br>";
                    echo "Dealers score: " . $dealer->score;
                    echo "<br>";
                    echo "You lose!";
                }
            }

            if(isset($_POST['surrender'])){
                $dealer->hit();
                if ($dealer->score < 15) {
                    $dealer->hit();
                    echo "GAME OVER!";
                    echo "<br>";
                    echo "Dealers score: " . $dealer->score;
                }
                echo "GAME OVER!";
                echo "<br>";
                echo "Dealers score: " . $dealer->score;
            }
            ?>
        </div>
    </div>
</div>

<?php

$_SESSION['player'] = $player; // here you declare what you want to put back into the the session.
$_SESSION['dealer'] = $dealer;

?>
</body>
</html>
