<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\play;

function isPrime(string $name)
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    play(generateGameData(), $name);
}
function getAnswer($num)
{
    if ($num == 1) {
        return false;
    }

    if ($num == 2) {
        return true;
    }

    if ($num % 2 == 0) {
        return false;
    }

    $ceil = ceil(sqrt($num));
    for ($i = 3; $i <= $ceil; $i = $i + 2) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

function generateGameData(): array
{
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $question = random_int(0, 1000);
        $correctAnswer = getAnswer($question) ? 'yes' : 'no';
        $result[] = [$question, $correctAnswer];
    }
    return $result;
}
