<?php

$pageTitle = "Diretories - includes";
$username = "Gabriel";

// file paths:
// directoeries

// file path
$filePath = __FILE__;

// directory path
$currentDirectory = __DIR__;

// getting actual file name 
$fileName = basename($filePath);

// getting directory name of a path
$directoryName = dirname($filePath);

// directory of this particular folder
$actualDirectory = dirname($currentDirectory);

?>

<!-- add head to file -->

<?php include "./includes/head.php" ?>

<body>


    <!-- side bar -->
    <?php require_once("./includes/sidebar.php"); ?>
    <main>

        <!-- header here -->
        <?php include "./includes/header.php" ?>




        <!-- form -->
        <section>
            <?= $currentDirectory; ?>
            <br>
            <br>

            <?= $filePath; ?>
            <br>
            <br>
            <?= $fileName; ?>

            <br>
            <br>
            <?= $directoryName; ?>

            <br>
            <br>
            <?= $actualDirectory; ?>

        </section>

        <footer>
            &copy; <span>digital dreams 2025</span>
        </footer>
    </main>


</body>

</html>