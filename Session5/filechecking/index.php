<?php
$filename = 'header.php';
if (file_exists($filename)) {
    include $filename;
} else {
    echo "The file '$filename' does not exist.";
}