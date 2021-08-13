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

    public function verify(string $userAnswer): bool
    {
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
        if ($userAnswer == $this->englishWord)
        {
            return true;
        }
        else {
            return false;
        }
    }
}