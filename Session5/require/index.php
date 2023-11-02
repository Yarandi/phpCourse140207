<?php
$filename = 'header1.php';
if (file_exists($filename)) {
    include $filename;
} else {
    echo "The file '$filename' does not exist.";
}

// require 'header.php'; // Require the header file
// echo "Content of the main page.". "</br>";
// require 'footer.php'; // Require the footer file

