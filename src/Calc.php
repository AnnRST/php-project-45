<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\play;

const OPERATIONS = ['+', '-', '*'];

function calculator(string $name)
{
    line('What is the result of the expression?');
    play(generateGameData(), $name);
}

function generateOperation(): string
{
    $index = random_int(0, (count(OPERATIONS) - 1));
    return OPERATIONS[$index];
}

function getCorrectAnswer(int $num1, int $num2, string $operation)
{
    if ($operation === '+') {
        return $num1 + $num2;
    }

    if ($operation === '-') {
        return $num1 - $num2;
    }

    return $num1 * $num2;
}

function generateGameData(): array
{
    $result = [];
    for ($i = 0; $i < 3; $i++) {
        $num1 = random_int(0, 100);
        $num2 = random_int(0, 100);
        $operation = generateOperation();
        $question = ("{$num1} {$operation} {$num2}");
        $correctAnswer = (string) getCorrectAnswer($num1, $num2, $operation);
        $result[] = [$question, $correctAnswer];
    }
    return $result;
}
