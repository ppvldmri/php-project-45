<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function welcome(string $taskDescription)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($taskDescription);
    return $name;
}

function askTask(string $task)
{
    line("Question: %s", $task);
    $userAnswer = prompt('Your answer');
    return $userAnswer;
}

function rightAnswer()
{
    line('Correct!');
}
function wrongAnswer(mixed $userAnswer, mixed $taskAnswer, string $name)
{
    line("'$userAnswer' is wrong answer ;(. Correct answer was '$taskAnswer'.");
    line("Let's try again, %s!", $name);
    exit;
}

function checkAnswer(mixed $taskAnswer, string $name, string $task)
{
    $userAnswer = \BrainGames\Engine\askTask($task);
    if ($userAnswer == $taskAnswer) {
        \BrainGames\Engine\rightAnswer();
    } else {
        \BrainGames\Engine\wrongAnswer($userAnswer, $taskAnswer, $name);
    }
}

function congratulate(string $name)
{
    line("Congratulations, %s!", $name);
}
