<?php
$multi_array = [
    1,
    2,
    [4, 5],
    [6, 7],
    [8],
];
print_r($multi_array);
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
print_r($output);
