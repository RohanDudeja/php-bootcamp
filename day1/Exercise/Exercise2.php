<?php
$input = 9876543210;
$temp = "$input";
$output = '';
for ($i = 0; $i < 10; $i++) {
    if ($i < 2 || $i > 7) {
        $output = $output . "" . $temp[$i];
    } else {
        $output = $output . "*";
    }
}
echo $output;
