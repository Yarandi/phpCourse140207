
<?php
//Send each value of an array to a function, multiply each value by itself, and return an array with the new values:
####################
# Example 1
####################
$b = [0 => "hamed"];

$b[0] = "reza";

print_r($b);



// $a=array(1,2,3,4,5);


// $result = array_map("myfunction",$a);
// print_r($result);


// function myfunction($a)
// {
//   return($a*$a);
// }







####################
# Example 2
####################

// // Create two arrays of names
$firstNames = ["John", "Alice", "Bob"];
$lastNames = ["Doe", "Smith", "Johnson"];


// // Define a callback function to combine first and last names
function combineNames($firstName, $lastName) {
    return $firstName . ' ' . $lastName;
}

// // Use array_map to combine names
$fullNames = array_map('combineNames', $firstNames, $lastNames);

// // Display the combined array
 print_r($fullNames);










?> 