<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function welcome(string $taskDescription)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($taskDescription);
    return $name;
}

function playGameFromEngine(string $taskDescription, callable $gameData)
{
    $name = welcome($taskDescription);
    for ($i = 1; $i <= ROUNDS; $i++) {
        [$task, $taskAnswer] = $gameData();
        line("Question: %s", $task);
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $taskAnswer) {
            line('Correct!');
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$taskAnswer'.");
            line("Let's try again, %s!", $name);
            return;
            // здесь использовался exit, потому что выход был из функции wrongAnswer.
            // соотвественно return выкидывал в текующую функцию и она продолжала работу
        }
    }
    line("Congratulations, %s!", $name);
}
