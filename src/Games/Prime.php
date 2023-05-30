<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\playGameFromEngine;

const TASK_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

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
    $gameData = function () {
        $number1 = rand(1, 100);
        $task = (string) $number1;
        $taskAnswer = \BrainGames\Games\Prime\isPrime($number1);
        $gameData = [$task,$taskAnswer];
        return $gameData;
    };
    playGameFromEngine(TASK_DESCRIPTION, $gameData);
}
