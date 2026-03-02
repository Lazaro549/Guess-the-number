<?php
// src/Game.php

namespace GuessTheNumber;

class Game
{
    private int $min;
    private int $max;
    private int $numberToGuess;
    private int $attempts = 0;

    public function __construct(int $min = 1, int $max = 100)
    {
        $this->min = $min;
        $this->max = $max;
        $this->numberToGuess = rand($min, $max);
    }

    // Check a guess and return feedback
    public function guess(int $number): string
    {
        $this->attempts++;

        if ($number < $this->numberToGuess) {
            return "Too low!";
        } elseif ($number > $this->numberToGuess) {
            return "Too high!";
        } else {
            return "correct";
        }
    }

    public function getAttempts(): int
    {
        return $this->attempts;
    }

    public function getNumber(): int
    {
        return $this->numberToGuess;
    }
}

?>
