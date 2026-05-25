<?php

$names = [
    'Ejike',
    'blue',
    'agness',
    'Lota'
];


$names[] = "Janet";

array_push($names, "Joseph");
array_pop($names);

function filter($filterable)
{
    return str_contains($filterable, "e");
}

$filtered_names = array_filter($names, "filter");
// associative array
$person = [
    "age" => 24,
    "name" => "John Doe",
    "gender" => "male",
    "name_of_company" => "cocacola",
    "is_student" => false
]
?>

<pre>
    <?php var_dump($names); ?>
    <?php var_dump($filtered_names); ?>
    <?php print_r($person); ?>

</pre>