<?php
$json = "{\"players\":[
    {
        \"name\":\"Ganguly\",
        \"age\":45,
        \"address\":{\"city\":\"Hyderabad\"}
    },{
        \"name\":\"Dravid\",
        \"age\":45,
        \"address\":{\"city\":\"Bangalore\"}
    },{
        \"name\":\"Dhoni\",
        \"age\":37,
        \"address\":{\"city\":\"Ranchi\"}
    },{
        \"name\":\"Virat\",
        \"age\":35,
        \"address\":{\"city\":\"Delhi\"}
    },{
        \"name\":\"Jadeja\",
        \"age\":35,
        \"address\":{\"city\":\"Hyderabad\"}
    },{
        \"name\":\"Jadeja\",
        \"age\":35,
        \"address\":{\"city\":\"Mumbai\"}
    }
    ]
}";

$players = json_decode($json, true)['players'];
// print_r($players);
$names = [];
$age = [];
$city = [];
$idx = 0;
foreach ($players as $value) {
    $names[$idx] = $value["name"];
    $age[$idx] = $value["age"];
    $city[$idx++] = $value["address"]["city"];
}
// Task 1
echo "Task 1\n";
print_r($names);
print_r($age);
print_r($city);

// Task 2
echo "Task 2\n";
print_r(array_unique($names));

// Task 3
$max = 0;
$maxAged = [];
for ($i = 0; $i < count($names); $i++) {
    if ($age[$i] > $max) {
        $max = $age[$i];
        $maxAged = [];
        $maxAged[0] = $names[$i];
    } else if ($age[$i] == $max) {
        $maxAged[count($maxAged)] = $names[$i];
    }
}
echo "Task 3\n";
print_r($maxAged);
