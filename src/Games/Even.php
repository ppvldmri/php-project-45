<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\playGameFromEngine;

const TASK_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number)
{
    if ($number % 2 == 0) {
        return 'yes';  // зачем здесь делать true и false, если в 23 строке с помощью функции получаем $taskAnswer
    } else {           // который потом сравнивается с ответом пользователя? тогда нужно же будет усложнять код,
        return 'no';   // для указания, что true - это yes
    }
}

function playGame()
{
    $gameData = function () {
        $number = rand(1, 100);
        $task = $number;
        $taskAnswer = isEven($number);
        $gameData = [$task,$taskAnswer];
        return $gameData;
    };
    playGameFromEngine(TASK_DESCRIPTION, $gameData);
}
