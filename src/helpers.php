<?php

if (function_exists('array_search_binary') === false) {
    function array_search_binary($array, $target) : int {
        $l = 0;
        $r = count($array) - 1;

        while ($l <= $r) {
            $i = floor(($l + $r) / 2);
            if ($target > $array[$i]) {
                $l = $i + 1;
            } elseif ($target < $array[$i]) {
                $r = $i - 1;
            } else {
                return $i;
            }
        }

        return -1;
    }
}