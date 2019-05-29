<?php
require 'blackjack.php'; // first you require Blackjack.php so your session has access to the class "blackjack" and its functions/methods.
session_start();  // here you call the whole session "Which is in theory a massive array with (global super-vars, and anything you put in it).

if (isset($_POST['hit'])){
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
            <h1>Output</h1>
            <?php
            if (isset($_POST['hit'])){
                $player->hit();
                if ($player->score>21){
                    echo "You lost!";
                    echo $player->score;
                }
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
