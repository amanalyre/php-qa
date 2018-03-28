<?php


/**
 * @param int $number
 * @return int
 * Необходимо посчитать сумму чисел до данного
 */
class CountToThis
{
    public $number;
    public function __construct ($number) {
        $this->number = $number;
    }

    public function countTo1() {
        $sum = 0;
        for ($i = 1; $i <= $this->number; $i++) {
            $sum+=$i;
        }
        return "Сумма чисел от 1 до ".$this->number." равна ".$sum;
    }

    public function countTo2() {
        $sum2 = ($this->number*($this->number+1))/2;
        return "Сумма всех чисел от 1 до ".$this->number." равна ".$sum2;
    }

}

$count99 = new CountToThis(77);
echo $count99->countTo1();
echo '<p>';
echo $count99->countTo2();

// Проверки:
// Что дано на вход положительное целое число
// Что сумма больше 1
// Сумма до 3 = 6