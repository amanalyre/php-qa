<?php
 //Правильная скобочная последовательность

class Brackets {
    protected $_stack;

    public function __construct() {
        $this->_stack = array();
    }

    public function push($item) {
        array_push($this->_stack, $item);
        return true;
    }

    public function pop() {
        return (array_pop($this->_stack));
    }

    public function top() {
        return (end($this->_stack));
    }

    public function isEmpty() {
        return (empty($this->_stack));
    }
}

function bracketsChecker($text='')
{
    $stack = new Brackets(); // Стек скобочек
    $all_brackets = "/[\(\[\{\<\)\]\}\>]/"; // Все виды скобочек
    $opening_bracket = "/[\(\[\{\<]/";  // Паттерн открывающих скобочек
    $closing_bracket = "/[\)\]\}\>]/"; // Паттерн закрывающих скобочек
    $brackets = "/\(\)|\[\]|\{\}\<\>/"; // Паттерн скобочек
    $character_array = str_split($text); // Преобразуем строку в массив

    foreach ($character_array as $character) {

        if (preg_match($all_brackets, $character)) {
            if (preg_match($opening_bracket, $character)) {
                $stack->push($character);
            } else if (preg_match($brackets, $stack->top().$character)) {
                $stack->pop();
            } else {
                $stack->push($character);
            }
        }
    }
    /*
     * Если стек пустой, вернуть истину.
     * Если нет, вернуть ложь.
     */
    if ($stack->isEmpty()) {
        return true;
    } else {
        return false;
    }
}


