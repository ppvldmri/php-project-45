<?php

namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;

function progWelcome()
{
     $taskExpression = 'What number is missing in the progression?';
     $name = \BrainGames\Engine\welcome($taskExpression);
     return $name;
}

function playGame()
{
    $name = \BrainGames\Games\Progression\progWelcome();
    for ($game = 0; $game < 3; $game++) {
        $numberStart = rand(1, 10);
        $step = rand(1, 5);
        $array = [];
        for ($x = 0; $x < 10; $x++) {
             $array[] = $numberStart;
             $numberStart = $numberStart + $step;
        }
        $askPosition = rand(0, 9);
        $taskAnswer = (string) $array[$askPosition];
        $array[$askPosition] = '..';
        $task = implode(" ", $array);
        $answer = \BrainGames\Engine\askTask($task);
        if ($answer == $taskAnswer) {
            line('Correct!');
        } else {
            \BrainGames\Engine\wrongAnswer($answer, $taskAnswer, $name);
            return;
        }
    }
    \BrainGames\Engine\Congratulations($name);
}


function progression()
{
    \BrainGames\Games\Progression\playGame();
}
