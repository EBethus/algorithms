<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function quickSort(array $arr)
{
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }

    $left = [];
    $right = [];
    $newArray = [];
    $pivot = array_pop($arr);

    for ($i = 0; $i < $length-1; $i++) {
        if ($arr[$i] <= $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    return array_merge($newArray, quickSort($left), [$pivot], quickSort($right));
}

print_r(quickSort([3, 0, 2, 5, -1, 4, 1 ]));
