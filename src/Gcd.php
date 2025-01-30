<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\play;

function gcd(string $name)
{
    line('Find the greatest common divisior of given numbers');
    play(generateGameData(), $name);
}

function getCorrectAnswer(int $num1, int $num2): string
{
    $correctAnswer = min($num1, $num2);
    while ($correctAnswer > 0) {
        if ($num1 % $correctAnswer === 0 && $num2 % $correctAnswer === 0) {
            return "{$correctAnswer}";
        }
        $correctAnswer -= 1;
    }
    return '1';
}

function generateGameData(): array
{
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $num1 = random_int(0, 100);
        $num2 = random_int(0, 100);
        $question = ("{$num1} {$num2}");
        $correctAnswer = getCorrectAnswer($num1, $num2);
        $result[] = [$question, $correctAnswer];
    }
    return $result;
}
