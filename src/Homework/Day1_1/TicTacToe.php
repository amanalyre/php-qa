<?php
/**
 * @param string $source
 * @return string
 * Необходимо определить, кто выиграл в крестики-нолики. null - незаполненная ячейка.
 * false - ничья, х - победа крестиков, о - победа ноликов
 */

class TicTacToe
{
    public $source;

    public function __construct(array $source = [])
    {
        $this->source = $source;
    }

    public function check()
    {

        if ($this->source[0][0] == $this->source[1][0] && $this->source[0][0] == $this->source[2][0]) {
            $res = $this->source[0][0]; // 1-3

        } elseif ($this->source[0][0] == $this->source[1][1] && $this->source[0][0] == $this->source[2][2]) {
            $res = $this->source[0][0]; // 1, 5, 9

        } elseif ($this->source[0][0] == $this->source[1][0] && $this->source[0][0] == $this->source[2][0]) {
            $res = $this->source[0][0]; // 1, 4, 7

        } elseif ($this->source[0][1] == $this->source[1][1] && $this->source[0][1] == $this->source[2][1]) {
            $res = $this->source[0][1]; // 2, 5, 8

        } elseif ($this->source[0][2] == $this->source[1][2] && $this->source[0][2] == $this->source[2][2]) {
            $res = $this->source[0][2]; // 3, 6, 9
            // тут надо дописать остальные варианты - вторая диагональ и 2-3 ряды.

            return $res;
        }

    }
}

$judge1 = new TicTacToe([
    ['o','x','o'],
    ['x','o','o'],
    ['x','o',null],
]);
echo $judge1->check();

$judge2 = new TicTacToe([
    ['o','x','o'],
    ['x','o','o'],
    ['x','o','x'],
]);
echo $judge2->check();

$judge3 = new TicTacToe([
    ['o','x','o'],
    ['x','o','x'],
    ['x','o','o'],
]);
echo $judge3->check();