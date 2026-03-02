<?php
use PHPUnit\Framework\TestCase;
use GuessTheNumber\Game;

class GameTest extends TestCase
{
    public function testGuessTooLow()
    {
        $game = new Game(1, 10);

        // Force the number to 5 for testing
        $reflection = new ReflectionClass($game);
        $property = $reflection->getProperty('numberToGuess');
        $property->setAccessible(true);
        $property->setValue($game, 5);

        $this->assertEquals('Too low!', $game->guess(3));
        $this->assertEquals(1, $game->getAttempts());
    }

    public function testGuessTooHigh()
    {
        $game = new Game(1, 10);

        $reflection = new ReflectionClass($game);
        $property = $reflection->getProperty('numberToGuess');
        $property->setAccessible(true);
        $property->setValue($game, 5);

        $this->assertEquals('Too high!', $game->guess(7));
        $this->assertEquals(1, $game->getAttempts());
    }

    public function testGuessCorrect()
    {
        $game = new Game(1, 10);

        $reflection = new ReflectionClass($game);
        $property = $reflection->getProperty('numberToGuess');
        $property->setAccessible(true);
        $property->setValue($game, 5);

        $this->assertEquals('correct', $game->guess(5));
        $this->assertEquals(1, $game->getAttempts());
    }
}
?>
