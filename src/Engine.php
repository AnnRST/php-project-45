<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

// gameData это массив с массивами по каждому из раундов (Вопрос - ответ) 
function play(array $gameData, string $name)
{
    foreach ($gameData as $round) {
        [$question, $correctAnswer] = $round;
        line('Question: %s', $question);
        $answer = prompt('Your answer: ');

        if ($answer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!'); 
    }
    line('Congratulations, %s!', $name);
}