<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\playGameFromEngine;

const TASK_DESCRIPTION = 'What is the result of the expression?';

function playGame()
{
    $gameData = function () {
        // я не знаю, как сделать иначе. если дать фукнции имя, то у меня пропадает цикл и выражение дается одно и тоже
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
    playGameFromEngine(TASK_DESCRIPTION, $gameData);
}
