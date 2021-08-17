<?php

function array_flatten($multi_array)
{
    $output = [];
    $count = 0;
    foreach ($multi_array as $array) {
        if (gettype($array) != 'array') {
            $output[$count++] = $array;
            continue;
        }
        foreach ($array as $number) {
            $output[$count++] = $number;
        }
    }
    return $output;
}

$multi_array = [
    1,
    2,
    [4, 5],
    [6, 7],
    [8],
];
// print_r($multi_array);
print_r(array_flatten($multi_array));
