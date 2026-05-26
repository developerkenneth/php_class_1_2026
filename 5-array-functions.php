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
];

$users = array_map(function ($user) {
         $user['email'] = $user['username']."@gmail.com";
         return $user;
}, $users)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY FUNCTIONS</title>
</head>

<body>

<pre>
    <?php print_r($users) ?>
</pre>

</body>

</html>