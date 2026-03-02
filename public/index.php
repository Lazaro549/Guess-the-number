<?php
session_start();

require __DIR__ . '/../src/Game.php';

use GuessTheNumber\Game;

// Initialize game in session
if (!isset($_SESSION['game'])) {
    $_SESSION['game'] = serialize(new Game(1, 100));
}

$game = unserialize($_SESSION['game']);
$message = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $guess = (int)$_POST['guess'] ?? 0;
    $result = $game->guess($guess);

    if ($result === 'correct') {
        $message = "🎉 Congratulations! You guessed the number {$game->getNumber()} in {$game->getAttempts()} attempts.";
        unset($_SESSION['game']); // reset game
    } else {
        $message = $result . " Try again!";
        $_SESSION['game'] = serialize($game); // update session
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guess the Number</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Guess the Number</h1>
        <?php if ($message): ?>
            <p class="message"><?= htmlspecialchars($message) ?></p>
        <?php endif; ?>
        <form method="post">
            <input type="number" name="guess" placeholder="Enter your guess" required>
            <button type="submit">Guess</button>
        </form>
    </div>
</body>
</html>
