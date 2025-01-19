<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\play;

function progression(string $name)
{
    line('What number is missing in the progression?');
    play(generateGameData(), $name);
}

function generateProgression(): array
{
    $firstNumber = random_int(0, 100);
    $step = random_int(0, 10);
    $progressionLenght = random_int(5, 10);
    $dataArray = [];
    $dataArray[0] = $firstNumber;

    for ($i = 1; $i < ($progressionLenght - 1); $i++) {
        $dataArray[$i] = $dataArray[$i - 1] + $step;
    }

    return $dataArray;
}

function generateGameData(): array
{
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $progression = generateProgression();
        $hiddenIndex = random_int(0, max: count($progression) - 1);
        $correctAnswer = (string) $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';
        $question = implode(' ', $progression);

        $result[] = [$question, $correctAnswer];
    }
    return $result;
}
