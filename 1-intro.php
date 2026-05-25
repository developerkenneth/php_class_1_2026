<?php

// my new name
$my_new_name_1 = "Uche";

// constant variables in php
const pie = 3.14;

// const name = $my_new_name_1;
// this
define("AGE", 25);
define("NEW_NAME", $my_new_name_1);

// echo NEW_NAME;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    
<h1>Hello world</h1>
<p>Welcome to PHP class</p>

<p><?php echo $my_new_name_1; ?></p>

<p><?php echo(pie);?></p>

<div><?php print(AGE) ?></div>

</body>
</html>