<?php

$questions = [
    ['question' => 'What is 2+2', 'correct' => '4'],
    ['question' => 'What is the capital of BD', 'correct' => 'Dhaka'],
    ['question' => 'Who wrote Agnibeena', 'correct' => 'Nazrul'],
];

$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your answer: "));
}

function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if (strcasecmp($answers[$index], $question['correct']) === 0) {
            $score++;
        }
    }
    return $score;
}

$myScore = evaluateQuiz($questions, $answers);
echo "\nYou scored $myScore out of " . count($questions) . "\n";

if ($myScore === count($questions)) {
    echo "Excellent Job!\n";
} elseif ($myScore >= 1) {
    echo "Good Effort!\n";
} else {
    echo "You Failed, Try again later.\n";
}
?>
