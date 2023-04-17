<?php

namespace BrainEngine\Engine;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function cli\line;
use function cli\prompt;


function welcome($taskExpression)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($taskExpression);
    return $name;
}

function askTask($task)
{
    line("Question: %s", $task);
    $answer = prompt('Your answer');
    return $answer;
}

function rightAnswer()
{
    line('Correct!');
}
function wrongAnswer($answer, $taskAnswer, $name)
{
    line("'$answer' is wrong answer ;(. Correct answer was '$taskAnswer'.");
    line("Let's try again, %s!", $name);
}

function Congratulations($name)
{
    line("Congratulations, %s!", $name);
}
