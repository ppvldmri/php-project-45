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
    $answer = prompt('Your answer');
    return $answer;
}

function rightAnswer()
{
    line('Correct!');
}
function wrongAnswer(mixed $answer, mixed $taskAnswer, string $name)
{
    line("'$answer' is wrong answer ;(. Correct answer was '$taskAnswer'.");
    line("Let's try again, %s!", $name);
}

function congratulate(string $name)
{
    line("Congratulations, %s!", $name);
}
