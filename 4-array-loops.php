<?php

$users = [
    [
        "id" => 1,
        "username" => "john",
        "name" => "john247"
    ],
    [
        "id" => 2,
        "username" => "jessica",
        "name" => "jessica247"
    ]
]

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY LOOP</title>
</head>

<body>

    <pre>
    <?php print_r($users); ?>
</pre>


    <?php
    foreach ($users as $key => $value) {
    ?>
        <pre>
            <span>This are the index: </span>
        <?php print_r($key); ?>
        <?php 
                foreach($value as $key1 => $val){
                    echo "<br>$key1 ===> $val <br>";
                }
        ?>

    </pre>
    <?php } ?>
</body>

</html>