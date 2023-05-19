<?php

$GLOBALS['array'] = ['Hello', 'Hi', 'c', 'd', 'Max', 'y', 'z'];
sort($GLOBALS['array']);



function binary_search($target, $start, $end)
{
    if ($start > $end) {
        echo 'Not Found !';
    }
    $middle = round((($start + $end) / 2), 0, PHP_ROUND_HALF_DOWN);
    if ($GLOBALS['array'][$middle] === $target) {
        echo "Found at index " . $middle ." in sorted array !";
        die;
    }
    if ($GLOBALS['array'][$middle] > $target) {
        return binary_search($target, $start, $middle - 1);
    }

    if ($GLOBALS['array'][$middle] < $target) {
        return binary_search($target, $middle + 1, $end);
    }
}

binary_search("Max", 0, count($GLOBALS['array']));
