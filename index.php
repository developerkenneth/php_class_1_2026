<?php
include_once "./classes/User.php";
include_once "./classes/Comments.php";

// creating an object from a class
$user = new User("John Doe", 26, "6'2", "web development");
$userOne = new User("Jessica Doe", 22, "5'1", "cyber security");

$userData = $user->userData;
var_dump($userData);

// changing username 
echo $user->changeUsername("Jessica Doe");

// Cannot access private property User::$secret or protected property User::$children  from global scope.
// echo $user->secret;
// echo $user->children;


// creating a new instance of comments which inherits User

$comments = new Comments("Ejike Doe", 28, "6'1", "digital marketing", "I love this channel");
var_dump($comments->getUserData());


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <h1>Welcome to PHP OOP</h1>
    <p>Hello, <?= $userData['name'] ?></p>
    <p>Hello, <?= $user->userData['name'] ?></p>

    <!-- echo user one name -->
    <p>Hello, <?= $userOne->userData['name'] ?></p>
    <p>Your secret is : <?= $user->getSecret(); ?></p>
    <p>Your comment is : <?= $comments->getComment(); ?></p>
    <p>The default comment is: <?= Comments::defaultComment();  ?></p>
    <p>Your default comment is: <?= Comments::getDefaultComment();  ?></p>
    <p>Your default comment is: <?php var_dump(Comments::getUserDataTwo($userOne));  ?></p>




</body>

</html>