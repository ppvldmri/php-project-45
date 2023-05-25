<?php

namespace BrainGames\Games\Progression;

require_once('src/Engine.php');

use function BrainGames\Engine\playGameFromEngine;

function playGame()
{
    $taskDescription = 'What number is missing in the progression?';
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
    playGameFromEngine($taskDescription, $gameData);
}
