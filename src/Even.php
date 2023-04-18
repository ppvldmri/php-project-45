<?php

namespace BrainGames\Even;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function cli\line;
use function cli\prompt;


function isEven(int $number)
{
    if ($number % 2 == 0) {
        return "yes";
    } else {
        return "no";
    }
}

function playEven()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($game = 0; $game < 3; $game++) {
        $number = rand(1, 100);
        line("Question: %s", $number);
        $answer = prompt('Your answer');

        if ($answer == isEven($number)) {
            line('Correct!');
        } else {
            $correctAnswer = isEven($number);
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, %s!", $name);
            break;
        }
        line("Congratulations, %s!", $name);
    }
}
