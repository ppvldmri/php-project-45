<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\playGameFromEngine;

const TASK_DESCRIPTION = 'What number is missing in the progression?';

function playGame()
{
    $gameData = function () {
        $numberStart = rand(1, 10);
        $step = rand(1, 5);
        $progressionArray = [];
        for ($x = 0; $x < 10; $x++) {
             $progressionArray[] = $numberStart;
             $numberStart = $numberStart + $step;
        }
        $taskPosition = rand(0, 9);
        $taskAnswer = (string) $progressionArray[$taskPosition];
        $progressionArray[$taskPosition] = '..';
        $task = implode(" ", $progressionArray);
        $gameData = [$task,$taskAnswer];
        return $gameData;
    };
    playGameFromEngine(TASK_DESCRIPTION, $gameData);
}
