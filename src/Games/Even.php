<?php

namespace BrainGames\Games\Even;

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

function evenWelcome()
{
    $taskDescription = 'Answer "yes" if the number is even, otherwise answer "no".';
    $name = \BrainGames\Engine\welcome($taskDescription);
    return $name;
}

function playGame()
{
    $name = \BrainGames\Games\Even\evenWelcome();
    for ($game = 0; $game < 3; $game++) {
        $number = rand(1, 100);
        line("Question: %s", $number);
        $userAnswer = prompt('Your answer');

        if ($userAnswer == isEven($number)) {
            line('Correct!');
        } else {
            $correctAnswer = isEven($number);
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, %s!", $name);
            break;
        }
        line("Congratulations, %s!", $name);
    }
}
