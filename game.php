<?php
session_start();
include ("blackjack.php");

$player = new Blackjack;
$dealer = new Blackjack;

$_SESSION['player'] = $player;
$_SESSION['dealer'] = $dealer;



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
                <input type="submit" name="hit" value="Hit">
                <input type="submit" name="stand" value="Stand">
                <input type="submit" name="surrender" value="Surrender...">
                <input type="submit" name="reset" value="Reset">
            </form>
            </div>

        <div class="output">
            <h1>Output</h1>
        </div>
    </div>






</div>





</body>
</html>
