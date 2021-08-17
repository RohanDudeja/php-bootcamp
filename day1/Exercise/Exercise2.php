<?php

function mask_number($input)
{
    $temp = "$input";
    $output = '';
    for ($i = 0; $i < 10; $i++) {
        if ($i < 2 || $i > 7) {
            $output = $output . "" . $temp[$i];
        } else {
            $output = $output . "*";
        }
    }
    return $output;
}
$input = 9876543210;
echo mask_number($input);
