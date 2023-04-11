<?php

namespace BrainCalc\Calc;

use function cli\line;
use function cli\prompt;




function playGame()
{

    function calcWelcome()
{
     $taskExpression = 'What is the result of the expression?';
     $name = \BrainEngine\Engine\welcome($taskExpression);
     return $name;
}

    for ($game = 0; $game < 3; $game++) {
        $number1 = rand(0, 10);
        $number2 = rand(0, 10);
        $task = "$number1" . " + " . "$number2";
        $taskAnswer = $number1 + $number2;
        $answer = \BrainEngine\Engine\askTask($task);
        if ($answer == $taskAnswer) {
            line('Correct!');
        } else {
            \BrainEngine\Engine\wrongAnswer($answer, $taskAnswer, $name);
            break;
        }
        line("Congratulations, %s!", $name);
    }
}
