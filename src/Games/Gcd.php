<?php

namespace BrainGames\Games\Gcd;

use function cli\line;
use function cli\prompt;

function gcdWelcome()
{
     $taskDescription = 'Find the greatest common divisor of given numbers.';
     $name = \BrainGames\Engine\welcome($taskDescription);
     return $name;
}

function findNod(int $number1, int $number2)
{
    while ($number1 != $number2) {
        if ($number1 > $number2) {
            $number1 =  $number1 - $number2;
        } else {
            $number2 = $number2 - $number1;
        }
    }return $number2;
}

function playGame()
{
    $name = \BrainGames\Games\Gcd\gcdWelcome();
    for ($game = 0; $game < 3; $game++) {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $task = "$number1" . " " . "$number2";
        $taskAnswer = \BrainGames\Games\Gcd\findNod($number1, $number2);
        \BrainGames\Engine\checkAnswer($taskAnswer, $name, $task);
    }
    \BrainGames\Engine\congratulate($name);
}
