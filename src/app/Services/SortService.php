<?php


namespace App\Services;


use Illuminate\Broadcasting\PrivateChannel;

class SortService
{
    /**
     * @param array $data
     * @return array
     */
    public static function mergeSort(array &$data)
    {
        if (count($data) <= 1) {
            return $data;
        }

        $dataCount = count($data);
        $mid = floor($dataCount / 2);

        $leftFrag = array_slice($data, 0, $mid);
        $rightFrag = array_slice($data, $mid);

        $leftFrag = self::mergeSort($leftFrag);
        $rightFrag = self::mergeSort($rightFrag);

        return self::merge($leftFrag, $rightFrag);
    }

    /**
     * @param $leftFrag
     * @param $rightFrag
     * @return array
     */
    private static function merge(&$leftFrag, &$rightFrag)
    {
        $result = [];

        while (count($leftFrag) > 0 && count($rightFrag) > 0) {
            if ($leftFrag[0] <= $rightFrag[0]) {
                $result[] = array_shift($leftFrag);
            } else {
                $result[] = array_shift($rightFrag);
            }
        }

        array_splice($result, count($result), 0, $leftFrag);
        array_splice($result, count($result), 0, $rightFrag);

        return $result;
    }

    /**
     * @param array $data
     * @return array
     */
    public function bubbleSort(array $data)
    {
        $lastIndex = count($data) - 1;

        for ($i = 0; $i <= $lastIndex; $i++) {
            for ($j = 0; $j < $lastIndex - $i; $j++) {
                $k = $j + 1;

                if ($data[$k] < $data[$j]) {
                    $valueK = $data[$k];
                    $valueJ = $data[$j];
                    $data[$k] = $valueJ;
                    $data[$j] = $valueK;
                }
            }
        }

        return $data;
    }
}
