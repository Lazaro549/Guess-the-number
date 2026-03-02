# Guess the Number

[![PHP Version](https://img.shields.io/badge/php-8.0%2B-blue.svg)](https://www.php.net/)  
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)  
[![Build Status](https://img.shields.io/badge/tests-passing-brightgreen.svg)](#tests)

A simple **PHP Guess the Number** game with **CLI** and **web** versions.  
Designed to learn PHP basics, object-oriented programming, and practice logic, loops, and conditionals.

---

## Table of Contents

- [Features](#features)  
- [Installation](#installation)  
- [CLI Usage](#cli-usage)  
- [Web Usage](#web-usage)  
- [Project Structure](#project-structure)  
- [Testing](#testing)  
- [Composer](#composer)  
- [License](#license)  

---

## Features

- Guess a random number in a defined range (default 1–100).  
- Feedback: "Too high", "Too low", or "Correct!"  
- Tracks number of attempts.  
- Two interfaces:  
  - CLI (terminal)  
  - Web (browser) with sessions.  
- Object-oriented design (`Game` class)  
- Unit tests with PHPUnit.  

---

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/Lazaro549/Guess-the-number.git
   cd Guess-the-number

2. Install dependencies with Composer:

   ```bash
   composer install

3. Make sure you have PHP 8+ installed:

   ```bash
   php -v
