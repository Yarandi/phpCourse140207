<?php

 
 #################################
 #           Array
 #################################
 $arr = array("godarzi" => ["name"=> "reza", "addrress"=> "tehran"], 1 => "hamed", 2 => "reza");

//print_r($arr);
//$strting = "Ali";
//var_dump($strting);

 $product = [
    ["name" => "shir", "price" => 290000],
    ["name" => "pofak", "price" => 290000],
    ["name" => "chips", "price" => 290000],
    ["name" => "chocloate", "price" => 290000],
    ["name" => "mive", "price" => 290000],
];

//var_dump($arr);

// echo test("A");
// function test($ch){
//     echo "hello from function". $ch. "<br>";
// }
// echo test("B");
 



 ###########################
 # php $GLOBALS
 # access global variables from anywhere in the PHP script (also from within functions or methods)
 ##########################

 $GLOBALS['user_name'] = "rezag";
 $GLOBALS['password'] = 54321;


//  echo $user_name;
//  echo "</br>";

// function useGlobal(){
//     echo $GLOBALS['user_name']." ".$GLOBALS['password'];
// }
//  echo useGlobal();




 ###########################
 # PHP $_SERVER
 # $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. 
 
 # HTTP_REFERER is an HTTP header that is sometimes sent by web browsers as part of an HTTP request. This header contains the URL of the referring page, which is the web page that the user was on before they navigated to the current page.
 #  It can be useful for various purposes, such as tracking where visitors come from, implementing navigation or "back" links, or preventing unauthorized access to specific pages based on the referrer.
 #  Here's an example of how you might use HTTP_REFERER in PHP to check the referring page and perform a specific action
##########################
//  echo $_SERVER['PHP_SELF'];
//  echo "<br>";
//  echo $_SERVER['SERVER_NAME'];
//  echo "<br>";
//  echo $_SERVER['HTTP_HOST'];
//  echo "<br>";
//  echo "<br>";
//  echo $_SERVER['HTTP_USER_AGENT'];
//  echo "<br>";
//  echo $_SERVER['SCRIPT_NAME'];
//  echo "<br>";
//  echo $_SERVER['SERVER_PROTOCOL'];
//  echo "<br>";
//  echo $_SERVER['REQUEST_METHOD']; //post get
//  echo "<br>";
//  echo $_SERVER['REQUEST_TIME']; //timestamp ?? 2023/12/21 12:12:10 jan 12 time(1697476535, "H:m:s  YYYY/MM/DD")
//  echo "<br>";
//  echo "<br>";
//  echo $_SERVER['HTTP_ACCEPT'];
//  echo "<br>";
//  echo $_SERVER['REMOTE_ADDR'];
//  echo "<br>";
//  echo "<br>";
//  echo $_SERVER['REMOTE_PORT'];
//  echo "<br>";
//  echo "<br>";

 echo $_SERVER['REMOTE_ADDR'];
 echo $_SERVER['REMOTE_HOST'];



###############################
# PHP Superglobal - $_REQUEST
#PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
###############################



 
 



 ###########################
 #   Working with arrays
 ##########################

//  $fruits = array("a" => "apple","banana", "cherry","apple", "b" => "banana", "cherry");
//  $fruits = array_unique($fruits);
//  print_r($fruits);


// foreach ($fruits as $key => $value){
//     echo "the key is ".$key. " the value is ".$value. "<br>";
// }


$fruits = ["apple", "banana", "cherry"];

//  $count = count($fruits);
//  echo "Number of fruits: $count";
//  echo "<br>";


 array_push($fruits, "orange"); //you can add the elements to the end of an array
 print_r($fruits);
 echo "<br>";

 //echo count($fruits);

 array_pop($fruits); //remove the last element of array
 print_r($fruits);
 echo "<br>";


#You can add elements to the beginning of an array using array_unshift() 
#and remove the first element using array_shift():

//   array_unshift($fruits, "strawberry");
//   print_r($fruits);
//   echo "<br>";
//   $removedFruit = array_shift($fruits);
//   print_r($fruits);


#merge
//  $moreFruits = array("mango", "grape");
//  $combined = array_merge($fruits, $moreFruits);
//  print_r($combined);

#search
// $key = array_search("cherry", $fruits);
// if ($key == true) {
//     echo "Found at index: $key";
// } else {
//     echo "Not found";
// }

#array_key_exists() - Check if a Key Exists
 $student = array("name" => "Alice", "age" => 25);
// if (array_key_exists("family", $student)) {
//     echo "Name exists in the array";
// } else {
//     echo "Name does not exist in the array";
// }



//  $values = array_values($student);
//  print_r($values);


#reverse
// $fruits = array("apple", "banana", "cherry");
// $reversedFruits = array_reverse($fruits);

// print_r($reversedFruits);


#array_keys() and array_values() - Get Array Keys and Values:
#array_keys($array) returns an array of all the keys in the original array.
#array_values($array) returns an array of all the values in the original array.

#array_unique() - Remove Duplicates:
#array_unique($array) removes duplicate values from an array, returning a new array with only the unique values.

#array_map() - Apply a Function to Each Element: @@@@@@
#array_map($callback, $array) applies a given callback function to each element of an array and returns a new array.
// // Create an array of numbers
// $numbers = [1, 2, 3, 4, 5];

// // Define a callback function to square each number
// function square($number) {
//     return $number * $number;
// }

// // Use array_map to square each number
// $squaredNumbers = array_map('square', $numbers);

// // Display the squared numbers
// print_r($squaredNumbers);



#array_filter() - Filter Array Elements:
#array_filter($array, $callback) filters an array using a callback function, retaining only the elements that satisfy the specified condition.

// // Create an array of numbers
// $numbers = [10, 25, 5, 30, 15, 40, 20];

// // Define a callback function to filter even numbers
// function filterEven($value) {
//     return ($value % 2 == 0); // Returns true for even numbers
// }

// // Use array_filter to filter even numbers    @@@@@@@@
// $evenNumbers = array_filter($numbers, 'filterEven');

// // Display the filtered array
// print_r($evenNumbers);




#array_slice() - Extract a Portion of an Array:
#array_slice($array, $offset, $length) returns a portion of an array specified by the offset and length.

#array_splice() - Remove and Replace Elements:
#array_splice($array, $offset, $length) removes a portion of an array and optionally replaces it with new elements.

#array_intersect() and array_diff() - Array Intersection and Difference:
#array_intersect($array1, $array2) returns an array containing values that exist in both arrays.
#array_diff($array1, $array2) returns an array containing values that exist in the first array but not in the second.

#sort() and rsort() - Sort an Array:
#sort($array) sorts an indexed array in ascending order.
#rsort($array) sorts an indexed array in descending order.

#asort() and arsort() - Sort an Associative Array by Values:
#asort($array) sorts an associative array by values in ascending order while maintaining the key-value associations.
#arsort($array) sorts an associative array by values in descending order while maintaining the key-value associations.

#ksort() and krsort() - Sort an Associative Array by Keys:
#ksort($array) sorts an associative array by keys in ascending order.
#krsort($array) sorts an associative array by keys in descending order.



// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
























?>