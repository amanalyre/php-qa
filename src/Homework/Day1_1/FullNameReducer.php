<?php
/**
 * @param int $number
 * @return int
 * Необходимо создать сокращенный вариант ФИО (Фамилия И.О)
 */
class FullNameReducer
{
    public $source;
    public function __construct ($source) {
        $this->source = $source;
    }

    public function cut() {
        if(preg_match('/^(\S+)\s+(\S)\S*\s+(\S)\S*$/', $this->source, $Res))
            return $Res[1].' '.$Res[2].'. '.$Res[3].'.';
    }

}

$ivan = new FullNameReducer("Штейн Иван Сергеевич");

echo $ivan->cut();

// Проверяем, что длина строки уменьшилась ?
