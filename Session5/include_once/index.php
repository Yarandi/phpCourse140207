<?php
// You can also use include_once and require_once to include files, 
// ensuring they are included only once, even if you use the statement multiple times.


include_once 'config.php'; // Include the configuration file only once

echo $dbpassword."</br>";

echo rezaYearDate();

include_once 'config.php'; // This won't include the file again
