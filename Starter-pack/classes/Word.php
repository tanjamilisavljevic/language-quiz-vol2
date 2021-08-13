<?php

class Word
{
    public $frenchWord;
    public $englishWord;

    public function __construct (string $frenchWord, string $englishWord)
    {
        $this -> frenchWord = $frenchWord;
        $this -> englishWord = $englishWord;
    }

    public function verify(string $answer): bool
    {
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?

    }
}