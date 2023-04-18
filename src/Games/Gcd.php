<?php

namespace BrainGcd\Gcd;

use function cli\line;
use function cli\prompt;

function gcdWelcome()
{
     $taskExpression = 'Find the greatest common divisor of given numbers.';
     $name = \BrainEngine\Engine\welcome($taskExpression);
     return $name;
}

function nod(int $number1, int $number2)
{
    while ($number1 != $number2) {
        if ($number1 > $number2) {
            $number1 =  $number1 - $number2;
        } else {
            $number2 = $number2 - $number1;
        }
    }return $number2;
}

function playGame()
{
    $name = \BrainGcd\Gcd\gcdWelcome();
    for ($game = 0; $game < 3; $game++) {
        $number1 = rand(0, 50);
        $number2 = rand(0, 50);
        $task = "$number1 " . "$number2";
        $taskAnswer = \BrainGcd\Gcd\nod($number1, $number2);
        $answer = \BrainEngine\Engine\askTask($task);
        if ($answer == $taskAnswer) {
            line('Correct!');
        } else {
            \BrainEngine\Engine\wrongAnswer($answer, $taskAnswer, $name);
            return;
        }
    }
    \BrainEngine\Engine\Congratulations($name);
}


function gcd()
{
    \BrainGcd\Gcd\playGame();
}
