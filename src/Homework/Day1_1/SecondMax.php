<?php
/**
 * @param array $source
 * @return int
 * Найдите второй по величине элемент в массиве после максимального
 */

class SecondMax
{
    public function __construct ($source = []) {
        $this->source = $source;
    }

    public function getSecond1()
    {
        $max = max($this->source);
        while ($max == max($this->source)) {
            $maxKey = array_keys($this->source, max($this->source))[0];
            $max = max($this->source);
            unset ($this->source[$maxKey]);
        }
        $secMax = max($this->source);

        return $secMax;
    }

    public function getSecond2()
    {
        $arr = array_unique($this->source);
        sort($arr);

        return $arr[count($arr)-2];
    }
}

// $arr == []
// $arr = [6]
//


$arr = new SecondMax([3, 4, 2, 4, 5, 5]);

echo $arr->getSecond1();
echo '<p>';
echo $arr->getSecond2();
