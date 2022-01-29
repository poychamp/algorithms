<?php


namespace App\Services;


class SearchService
{
    /**
     * @param $needle
     * @param array $haystack
     * @return false|float|int
     */
    public static function binarySearchIdx($needle, array $haystack) {
        $start = 0;
        $end = count($haystack) - 1;

        while ($start <= $end) {
            $mid = floor(($start + $end) / 2);

            if ($needle < $haystack[$mid]) {
                $end = $mid - 1;
            } elseif($needle > $haystack[$mid]){
                $start = $mid + 1;
            } elseif($needle == $haystack[$mid]){
                return $mid;
            }
        }

        return -1;
    }
}
