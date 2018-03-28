<?php
/**
 * @param int $source
 * @return string
 * Необходимо заменить число, которое делится на 3 без остатка на fizz, а то, которое делится на 5 без остатка на buzz.
 * Если делится и на то и на то, то записать fizzbuzz.
 */

class FizzBuzz
{
    public $source;
    public function __construct ($source) {
        $this->source = $source;
    }

    public function getAnswer() {

        if ($this->source % 3 == 0 && $this->source % 5 == 0) {
            $res = "fizzbuzz";
        } elseif ($this->source % 3 == 0) {
            $res = "fizz";
        } elseif ($this->source % 5 == 0){
            $res = "buzz";
        } else $res =  $this->source;

        return $res;
    }
}

// Проверка, что число введено
// проверка, что это число
// Проверка, что оно положительное ?
// Проверка, что оно целое ?
// Проверка, что оно может быть интерпретировано как десятичное ?
// Удостовериться, что при подстановке 15 выведется физбаз

$givenNumber = new FizzBuzz(0);
echo $givenNumber->getAnswer();