<?php

namespace BrainCalc\Calc;

use function cli\line;
use function cli\prompt;

function calcWelcome()
{
     $taskExpression = 'What is the result of the expression?';
     $name = \BrainEngine\Engine\welcome($taskExpression);
     return $name;
}


function playGame()
{
    $name = \BrainCalc\Calc\calcWelcome();
    for ($game = 0; $game < 3; $game++) {
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
        $answer = \BrainEngine\Engine\askTask($task);
        if ($answer == $taskAnswer) {
            \BrainEngine\Engine\rightAnswer();
        } else {
            \BrainEngine\Engine\wrongAnswer($answer, $taskAnswer, $name);
            return;
        }
    }
    \BrainEngine\Engine\Congratulations($name);
}


function calc()
{
    \BrainCalc\Calc\playGame();
}
