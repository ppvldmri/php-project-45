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

function playGame()
{
    $name = \BrainPrime\Prime\primeWelcome();
    for ($game = 0; $game < 3; $game++) {
        $task = rand(1, 100);
        match (gmp_prob_prime($task)) {
            0 => $taskAnswer = 'no',
            1 => $taskAnswer = 'yes',
            2 => $taskAnswer = 'yes'
        };
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
