<?php
// src/Player.php

namespace GuessTheNumber;

class Player
{
    public static function getInput(string $prompt = "Enter your guess: "): int
    {
        echo $prompt;
        $input = trim(fgets(STDIN));

        if (!is_numeric($input)) {
            echo "Please enter a valid number.\n";
            return self::getInput($prompt);
        }

        return (int)$input;
    }
}

?>
