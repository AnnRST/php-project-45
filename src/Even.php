<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\play;

function isEven(string $name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    play(generateGameData(), $name);
}

function getAnswer(int $number): string
{
    return $number % 2 === 0 ? 'yes' : 'no';
}

function generateGameData(): array
{
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $number = random_int(0, 1000);
        $correctAnswer = getAnswer($number);
        $result[] = [$number, $correctAnswer];
    }
    return $result;
}
