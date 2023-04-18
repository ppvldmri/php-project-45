<?php

namespace BrainPrime\Prime;

use function cli\line;
use function cli\prompt;

function primeWelcome()
{
     $taskExpression = 'Answer "yes" if given number is prime. Otherwise answer "no".';
     $name = \BrainEngine\Engine\welcome($taskExpression);
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
    $name = \BrainPrime\Prime\primeWelcome();
    for ($game = 0; $game < 3; $game++) {
        $number1 = rand(1, 100);
        $task = (string) $number1;
        $taskAnswer = \BrainPrime\Prime\isPrime($task);
        $answer = \BrainEngine\Engine\askTask($task);
        if ($answer == $taskAnswer) {
            \BrainEngine\Engine\rightAnswer();
        } else {
            \BrainEngine\Engine\wrongAnswer($answer, $taskAnswer, $name);
            return;
        }
    }
    \BrainEngine\Engine\Congratulations($name);
}

function prime()
{
    \BrainPrime\Prime\playGame();
}
