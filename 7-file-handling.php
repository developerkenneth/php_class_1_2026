<?php

// file handling

//reading a file
// $handle = fopen("./files/sample.txt", "r");

// $filesize = filesize("./files/sample.txt");
// $fileDetails = fread($handle, $filesize);


// writing into a file
//  $handle = fopen("./files/test.txt", "w");
// //  write text here:
// $text = "hello world I love u all";
// fwrite($handle,$text);


// appending information into a file
$handle = fopen("./files/test.txt", "a");
//  write text here:
$text = "\nhello world I love u all";
fwrite($handle, $text);

// file get contents

$fileContent = file_get_contents("./files/test.txt");
echo $fileContent;

// deleting a file in php
unlink("./files/test.txt");
?>



<br>
<br>
<?php //echo $fileDetails 
?>