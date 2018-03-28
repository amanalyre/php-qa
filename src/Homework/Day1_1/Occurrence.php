<?php

/**
 * @param string $source
 * @return int
 * Необходимо найти число вхождений какой-нибудь выбранной вами цифры в выбранном вами числе
 */

class Occurrence
{
    public $source;
    public function __construct ($source, $findMe) {
        $this->source = $source;
        $this->findMe = $findMe;
    }

    public function counter() {
        $len = strlen($this->source);
        $count = 0;

        for ($len; $len > 0; $len = $len -1) {
            $count = substr_count($this->source,$this->findMe);
        }
        return "В ". $this->source . " число ".$this->findMe. " встречается ".$count." раз";
    }
}

$lollypop = new Occurrence(897398573948534, 4);

echo $lollypop->counter();

// Проверяем, что 5877657 вернет 3.

