<?php
// index.php - Guess the Number CLI game

// Set the range of numbers
$min = 1;
$max = 100;

// Generate a random number
$numberToGuess = rand($min, $max);

// Initialize attempts
$attempts = 0;

echo "Welcome to Guess the Number!\n";
echo "I'm thinking of a number between $min and $max.\n";

while (true) {
    $attempts++;

    // Prompt the user
    echo "Enter your guess: ";
    $guess = trim(fgets(STDIN));

    // Validate input
    if (!is_numeric($guess)) {
        echo "Please enter a valid number.\n";
        continue;
    }

    $guess = (int)$guess;

    // Check the guess
    if ($guess < $numberToGuess) {
        echo "Too low! Try again.\n";
    } elseif ($guess > $numberToGuess) {
        echo "Too high! Try again.\n";
    } else {
        echo "Congratulations! You guessed the number $numberToGuess in $attempts attempts.\n";
        break;
    }
}

?>
