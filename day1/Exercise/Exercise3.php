<?php
$input = ["snake_case", "camel_case","random_snake_case_string"];
$output = [];
$index = 0;
foreach ($input as $value) {
    $broke = explode("_", $value);
    for ($i = 0; $i < count($broke); $i++) {
        if ($i == 0) {
            $output[$index] = $broke[0];
        } else {
            $output[$index] = $output[$index] . "" . ucwords($broke[$i]);
        }
    }
    $index++;
}
print_r($output);
