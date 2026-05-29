<?php

$pageTitle = "File upload";
$username = "John Doe";

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


$uploadedFile = "";

?>

<!-- add head to file -->

<?php include "./includes/head.php" ?>

<body>


    <!-- side bar -->
    <?php require_once("./includes/sidebar.php"); ?>
    <main>

        <!-- header here -->
        <?php include "./includes/header.php" ?>

        <?php

        // handling file upload

        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            if ($_FILES['picture']) {

                $fileName = $_FILES['picture']['name'];
                $temporary = $_FILES['picture']['tmp_name'];

                // turns string to an array using the operator giving
                $fileArray = explode(".", $fileName);

                // end : gets the last array element
                $ext =  end($fileArray);

                if ($fileName) {
                    // random name
                    $randomName = time();
                    // new name 
                    $filePath = "./storage/$randomName.$ext";
                    // handle file upload
                    try {
                        move_uploaded_file($temporary, $filePath);
                        $uploadedFile = $filePath;
                        echo "file has been upload successfully";
                    } catch (Exception $error) {
                        echo $error->getMessage();
                    }
                }
            }
        }

        ?>
        <div class="content">

            <!-- form container -->
            <section class="container">
                <!-- form -->
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="picture">Upload a picture:</label>
                        <input type="file" name="picture">
                    </div>


                    <div class="form-group">
                        <button class="btn" type="submit">Upload picture</button>
                    </div>
                </form>
            </section>

            <?php if ($uploadedFile) : ?>
                <div class="uploaded-file">
                    <img src="<?= $uploadedFile ?>" alt=" file that was uploaded">
                </div>
            <?php endif; ?>
        </div>





        <footer>
            &copy; <span>digital dreams 2025</span>
        </footer>
    </main>


</body>

</html>