<?php

class LanguageGame
{
    private array $words = [];
    public Word $randomWord;


    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            $word = new Word($frenchTranslation, $englishTranslation);
            array_push($this->words, $word);
        }
    }


    public function run()
    {
        // TODO: check for option A or B
        if (!empty($_GET['userAnswer']) && isset($GET['submit'])) {
            $this->startGame();
        } else {
            $this->displayRandom();
        }
    }


    // Option A: user visits site first time (or wants a new word)
    // TODO: select a random word for the user to translate
    public function displayRandom()
    {
        $this->randomWord = $this->words[array_rand($this->words, 1)];
        $_SESSION['translation'] = $this->randomWord->englishWord;
    }

    // Option B: user has just submitted an answer
    // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
    // TODO: generate a message for the user that can be shown
    public function startGame()
    {

        $userAnswer = $_GET['userAnswer'];
    }
}