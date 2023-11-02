<?php
// Using file_get_contents
$content = file_get_contents('file.txt');
echo $content;

// Using fopen and fread
$file = fopen('file.txt', 'r');
while (!feof($file)) {
    echo fgets($file);
}
fclose($file);





// // Using file_put_contents
// $data = "Hello, World!";
// file_put_contents('output.txt', $data);

// // Using fopen and fwrite
// $file = fopen('output.txt', 'w');
// fwrite($file, $data);
// fclose($file); 




// // Using file_put_contents to append
// $data = "Appended content";
// file_put_contents('output.txt', $data, FILE_APPEND);

// // Using fopen with 'a' mode
// $file = fopen('output.txt', 'a');
// fwrite($file, $data);
// fclose($file);


// $filename = 'file.txt';
// if (file_exists($filename)) {
//     echo "The file '$filename' exists.";
// } else {
//     echo "The file '$filename' does not exist.";
// }



// $filename = 'file.txt';
// if (file_exists($filename)) {
//     unlink($filename);
//     echo "The file '$filename' has been deleted.";
// } else {
//     echo "The file '$filename' does not exist.";
// }


// // Reading a CSV file
// $file = fopen('data.csv', 'r');
// while (($row = fgetcsv($file)) !== false) {
//     print_r($row);
// }
// fclose($file);

// // Writing data to a CSV file
// $data = ['John Doe', 'johndoe@email.com', '123-456-7890'];
// $file = fopen('data.csv', 'a');
// fputcsv($file, $data);
// fclose($file);