<?php
#    You can use variables to dynamically include files based on conditions.

$page = 'header'; // Dynamic page selection
include $page.'.php'; // Includes 'about.php' based on the value of $page

include 'header.php';

// include '/var/www/includes/header.php'; // Absolute path
// include '../includes/footer.php'; // Relative path


