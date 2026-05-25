<?php

// built in arrays in php comes with the dollar sign and underscore

/**
 * $_SERVER
 * $_GET
 * $_POST
 */
// var_dump($_SERVER); //get server related informations
//   var_dump($_GET);  //get datas sent using a get request method
//   var_dump($_POST);  //get datas sent using a post request method


// if ($_SERVER['REQUEST_METHOD'] !== "POST") {
//     exit("this file does not accept this request method: send only post request method");
// }
?>

<?php var_dump($_SERVER['REQUEST_METHOD']); ?>
<pre>
  <?php var_dump($_POST); ?>
 </pre>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ARRAYS</title>
</head>

<body>



    <form action="" method="post">
        <input type="text" name="name" placeholder="enter ur name">
        <br><br>


        <input type="email" name="email" placeholder="enter ur email">
        <br><br>

        <input type="password" name="password" placeholder="enter ur password">
        <br><br>
        <button type="submit">submit</button>

    </form>
</body>

</html>