<?php

namespace BrainGcd\Gcd;

use function cli\line;
use function cli\prompt;

function gcdWelcome()
{
     $taskExpression = 'Find the greatest common divisor of given numbers';
     $name = \BrainEngine\Engine\welcome($taskExpression);
     return $name;
}

function playGame()
{
    $name = \BrainGcd\Gcd\gcdWelcome();
    for ($game = 0; $game < 3; $game++) {
        $number1 = rand(0, 50);
        $number2 = rand(0, 50);
        $task = "$number1 " . "$number2";
        $taskAnswer = gmp_gcd($number1, $number2);
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
