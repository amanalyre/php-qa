<?php


namespace Homework2;


class BanThisItem
{
    /**
     * @param array $items
     * @return array
     */

    public function findDuplicate(array $items)
    {
        $double = [];
        $arr = array_count_values($items);
        foreach ($arr as $items => $count){
            if($count > 1){
                $double[] = $items;
            }
        }
        return $double;
    }
}