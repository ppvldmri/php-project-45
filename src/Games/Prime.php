<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;

function primeWelcome()
{
     $taskDescription = 'Answer "yes" if given number is prime. Otherwise answer "no".';
     $name = \BrainGames\Engine\welcome($taskDescription);
     return $name;
}

function isPrime(int $number1)
{
    if ($number1 == 1) {
        return 'no';
    }
    for ($i = 2; $i < $number1; $i++) {
        if ($number1 % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}

function playGame()
{
    $name = \BrainGames\Games\Prime\primeWelcome();
    for ($game = 0; $game < 3; $game++) {
        $number1 = rand(1, 100);
        $task = (string) $number1;
        $taskAnswer = \BrainGames\Games\Prime\isPrime($number1);
        \BrainGames\Engine\checkAnswer($taskAnswer, $name, $task);
    }
    \BrainGames\Engine\congratulate($name);
}
