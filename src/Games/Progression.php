<?php

namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;

function progressionWelcome()
{
     $taskDescription = 'What number is missing in the progression?';
     $name = \BrainGames\Engine\welcome($taskDescription);
     return $name;
}

function playGame()
{
    $name = \BrainGames\Games\Progression\progressionWelcome();
    for ($game = 0; $game < 3; $game++) {
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
        $answer = \BrainGames\Engine\askTask($task);
        if ($answer == $taskAnswer) {
            line('Correct!');
        } else {
            \BrainGames\Engine\wrongAnswer($answer, $taskAnswer, $name);
            return;
        }
    }
    \BrainGames\Engine\congratulate($name);
}


function progression()
{
    \BrainGames\Games\Progression\playGame();
}
