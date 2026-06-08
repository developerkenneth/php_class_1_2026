<?php


// connecting and fetching data using mysqli
// $connection = mysqli_connect("localhost", "kenneth", "password", "new_db");
// $sql = "SELECT * FROM `users`";

// $result = mysqli_query($connection, $sql);
// $data = mysqli_fetch_all($result);


$dsn = "mysql:host=localhost;dbname=new_db;";


try {
    $pdo = new PDO($dsn, "kenneth", "password");
} catch (PDOException $error) {
    echo $error->getMessage();
}


// CRUD

// CREATE, READ, UPDATE AND DELETE

// CREATE
// $sql = "INSERT INTO `users` (`name`, `password`, `email`) VALUES ('jessica', 'password', 'jessica@gmail.com')";
// $stmt = $pdo->query($sql);


// UPDATE
// $sql = "UPDATE `users` SET  `name` = 'Janet', `password` = 'password123', `email` ='janet@gmail.com', `updated_at` = NOW()  WHERE `id` = 8";
// $stmt = $pdo->query($sql);

// DELETE
$sql = "DELETE FROM `users` WHERE `id`= 9";
$stmt = $pdo->query($sql); //execute sql command


// READ ALL data
$sql = "SELECT * FROM `users`";
$stmt = $pdo->query($sql, PDO::FETCH_ASSOC);
$users = $stmt->fetchAll();


// READ SINGLE data
$sql = "SELECT * FROM `users` WHERE `id`= 4";
$stmt = $pdo->query($sql, PDO::FETCH_ASSOC);
$user = $stmt->fetch();


?>

<pre>
<?php var_dump($users); ?>
<?= $users[1]['name'] ?>
</pre>


<pre>
<?php var_dump($user); ?>
<?= $user['name'] ?>
</pre>