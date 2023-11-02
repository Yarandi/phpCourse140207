<?php 

###################################################
#    Operators , if else , swith case statements, 
###################################################

#echo( max(0, 10, 13, -300, -1000) ); //maximise 13
#echo( min(0, 10, 13, -300, -1000) ); //minimum -1000

#echo abs(-10); // 10
#echo rand(1, 1000);

#  = assignment  
# $x = 1
 
# == 
// if ("12" == 12){
//     echo "yes";
// }else{
//     echo "No";
// }


# === indetical check type


# <> not equal
// if (12 <> 12){ //not equal
//     echo "yes";
// }else{
//     echo "No";
// }



// != not equal
// if (12 != 12){ //not equal
//     echo "yes";
// }else{
//     echo "No";
// }

#echo (1 && 0) //true ??
#var_dump(1 && 1);

# &&
// $condition1 = false;
// $condition2 = true;
// if ($condition1 && $condition2) {
//     echo "Both conditions are true.";
// } else {
//     echo "At least one condition is false.";
// }

# ||

// $isLoggedin = false;
// $userRole = "guest";
// $isAllowed = true;

// if ($isLoggedin || $userRole === "admin" || $isAllowed) {
//     echo "Access granted.";
// } else {
//     echo "Access denied.";
// }


# >= 

// if (12 <= 13){ 
//     echo "yes";
// }else{
//     echo "No";
// }



# <= 



# Chaining ?? Operators
#we chain multiple ?? operators to provide a default value if all preceding variables are null or not set.

// $a = true ?? false; 
// var_dump($a);

$value1 = null;
$value2 = null;
$value3 = "Hello Reza";
$result = $value1 ?? $value2 ?? $value3 ?? "Default";
echo "Result: $result";

//$x = 1;
//$a = ++$x; // $a = $x + 1
//  echo $x++."<br>"; 
//  echo $x;

// $age = 20;
// $is_adult = ($age < 18) ? true : false; 


#if else statement

// if ($age < 18) {
//     $is_adult =  true;
// }elseif($age == 18){
//     echo "you are 18";
// }elseif($age > 50){
//     echo "you are too old"
// }else{
//     echo "you are non of them";
// }



#  switch case statement
// $favcolor = "green";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     //break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     //break;
//   case "green":
//     echo "Your favorite color is green!"."<br>";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }




# if else statement

// if ($age < 18) {
//     $is_adult =  true;
// }elseif($age == 18){
//     echo "you are 18";
// }elseif($age > 50){
//     echo "you are too old";
// }else{
//     echo "you are non of them";
// }

































?>

