<?php

namespace BrainGames\Games\Calc;

require_once('src/Engine.php');

use function BrainGames\Engine\playGameFromEngine;

function playGame()
{
    $taskDescription = 'What is the result of the expression?';
    $gameData = function () {
        $operatorArr = ["+", "-", "*"];
        $operator = $operatorArr[rand(0, 2)];
        $number1 = rand(0, 10);
        $number2 = rand(0, 10);
        $task = "$number1" . " $operator " . "$number2";
        $taskAnswer = '';
        match ($operator) {
            '-' => $taskAnswer = $number1 - $number2,
            '+' => $taskAnswer = $number1 + $number2,
            '*' => $taskAnswer = $number1 * $number2,
        };
        $gameData = [$task,$taskAnswer];
        return $gameData;
    };
        playGameFromEngine($taskDescription, $gameData);
}
