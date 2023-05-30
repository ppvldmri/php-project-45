<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\playGameFromEngine;

const TASK_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

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
    $gameData = function () {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $task = "$number1" . " " . "$number2";
        $taskAnswer = \BrainGames\Games\Gcd\findNod($number1, $number2);
        $gameData = [$task,$taskAnswer];
        return $gameData;
    };
    playGameFromEngine(TASK_DESCRIPTION, $gameData);
}
