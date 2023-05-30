<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\playGameFromEngine;

const TASK_DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function playGame()
{
    $gameData = function () {
        $numberStart = rand(1, 10);
        $step = rand(1, 5);
        $progressionArray = [];
        for ($x = 0; $x < PROGRESSION_LENGTH; $x++) {
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
