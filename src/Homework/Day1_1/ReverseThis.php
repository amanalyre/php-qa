<?php


/**
 * @param string $word
 * @return string
 * Необходимо инвертировать строку
 */

class ReverseThis
{
    public $word;
    public function __construct ($word) {
        $this->word = $word;
    }

    public function reverseSimple()
    {
        return strrev($this->word);
    }
    // Для тестов: сравнить длину слова, сравнить первую с последней буквы слов

    public function reverseComplicated() {
        $len = strlen($this->word);
        $reverse = "";

        for ($len; $len > 0; $len = $len -1) {
            $reverse.= substr($this->word,$len-1,1);
        }
        return $reverse;
    }
}

$dummy = new ReverseThis("dummy");
echo $dummy->reverseSimple();
echo '<p>';
echo $dummy->reverseComplicated();

