<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function isEven($name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
        
    for ($i = 1; $i < 4; $i += 1) {
        $number = random_int(0, 1000);
        line('Question: %d', $number);
        $answer = prompt('Your answer: ');
        
        $correctAnswer = getAnswer($number);
        if ($correctAnswer !== $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            return;
        }
    
        line('Correct!');
    }
    line('Congratulations, %s!', $name);
}

function getAnswer(int $number): string
{
    return $number % 2 === 0 ? 'yes' : 'no';
}