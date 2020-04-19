<?php

$word = "doorbell";
$letters = str_split($word);
$display = array_fill(0, count($letters), '_');
$guesses = 5;
while ($guesses > 0) {
    echo "\n" . join(' ', $display) . "\n";
    echo 'Guess a letter: ';
    $letter = trim(fgets(STDIN));
    $correctGuess = false;

    $i = 0;
    foreach ($letters as $item) {

        if ($item === $letter) {
            $display[$i] = $letter;
            $correctGuess = true;
        }
        $i++;
    }

    if ($correctGuess === false) {
        $guesses--;
        echo "Wrong! $guesses wrong guesses left.\n";
    } else {

        if (in_array("_", $display) === false) {
            echo "You have won!";
            exit;
        } else {
            echo "Correct! $guesses wrong guesses left.\n";
        }
    }

    echo "\n";
    echo "You lost!\n";
}
