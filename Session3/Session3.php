<?php

#############################
#       constant
#############################
// define("a", 3.14, false); 
// define("A", 3.14, false);
// echo a;
// echo A;


#############################
#          Loops
#############################

#while

// $x = 0;
// while($x <= 100) {
//   echo "The number is: $x <br>";
//   ++$x; // $x = $x + 10
// } 


#do while
// $x = 1;
// do {
//   echo "The number is: $x <br>";
//   $x++;
// } while ($x <= 5);


#for
// for ($i = 2; $i <= 10; $i++) {
    
//    if($x % 2 == 0){
//         echo "The number is: ". $x+1000 ."<br>";
//   }
// } 

# use break and continue in for loop ???
// for ($x = 0; $x < 10; $x++) {
//     if ($x == 4) {
//       continue;
//     }
//     echo "The number is: $x <br>";
//   }


// for ($x = 0; $x < 10; $x++) {
//     if ($x == 4) {
//       break;
//     }
//     echo "The number is: $x <br>";
//   }


#array
//$color = array("blue", "red", "purple", "green");

#foreach

// foreach ($colors as $color){ //3
   
//     if ($color == "purple"){
//         echo "this color is favorite for girls". "</br>";   //break
//         continue;
//     }
//     echo $color. "</br>";
// }



// $colors = array("reza" => "blue", "hamed" => "red", 3 => "purple"); //define key and value "reza" => "blue"

// foreach ($colors as $key => $value){

//     echo $key + $value."</br>";
// }


// $names = array("reza", "ali");
// foreach ($names as $name){
//     echo $name;
// }


###############################
#  Functions
###############################
// declare(strict_types=1);
// function writeHelloMessage(string $name, int $age, string $phone = null){

//     echo "Hello " . $name; 
//     echo "age " . $age+1;
//     echo "phone " . $phone."</br>";

// }
//declare(strict_types=0); need search



// function addnumbers(float $a, float $b){  //readiblity extendibility
//     return $a+$b; 
// }

// echo addnumbers(12.5, 11.5);
// echo addnumbers(12.5, 11.5);
// echo addnumbers(1.5, 11.5);
// echo addnumbers(2.5, 11.5);
// echo addnumbers(12.8, 11.5);
// echo addnumbers(12.5, 11.5);
// echo addnumbers(12.5, 11.5);
// echo addnumbers(12.5, 11.5);
// echo 12.5+11.5;

//kebab case ?
//camel case ?
//pascal case ?
//snake case ?

//this function will change the first character of the nae to0 uppercase
function convertFirstCharracter(string $name){ // hamed

    $firstCharacterOfName = substr($name, 0, 1); //h
    $captalizetheFirstCharacter = strtoupper($firstCharacterOfName); //H
    $restOfTheName = substr($name, 1); //amed
    
    return $captalizetheFirstCharacter.$restOfTheName;

    //return strtoupper(substr($name, 0, 1)).substr($name, 1);
    
}

echo convertFirstCharracter("gholi");

echo convertFirstCharracter("saeed");

echo convertFirstCharracter("david");

echo convertFirstCharracter("ali");

echo convertFirstCharracter("hashem");

