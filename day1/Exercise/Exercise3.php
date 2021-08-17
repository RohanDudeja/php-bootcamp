<?php
function camalCase($input)
{
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
    return $output;
}
$input = ["snake_case", "camel_case", "random_snake_case_string"];

print_r(camalCase($input));
