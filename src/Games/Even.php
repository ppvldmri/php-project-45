<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\playGameFromEngine;

function isEven(int $number)
{
    if ($number % 2 == 0) {
        return "yes";
    } else {
        return "no";
    }
}

function playGame()
{
    $taskDescription = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = function () {
        $number = rand(1, 100);
        $task = $number;
        $taskAnswer = isEven($number);
        $gameData = [$task,$taskAnswer];
        return $gameData;
    };
    playGameFromEngine($taskDescription, $gameData);
}
