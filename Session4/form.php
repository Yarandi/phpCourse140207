<!DOCTYPE HTML>  
<html>
<head>
</head>

<body>  
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = $_POST["website"];
  $comment = $_POST["comment"];
  $gender =  $_POST["gender"];
}
?>



<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;


function test_input($data) {
    $data = trim($data); //ABVC///
    $data = stripslashes($data); //ABVC
    $data = htmlspecialchars($data); //ABVC
    return $data;
  }






?>

</body>
</html>




























<!-- <html>
<body> -->

<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <lable style="color:red">Name:</lable> <input type="text" name="name"> * </br></br>
  password <input type="text" name="password">
  <input type="submit">
</form> -->

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//   // collect value of input field
//   $name = $_POST['name'];

//   $password = $_POST['password'];

//   echo $name;
//   echo $password;
  
//   if (empty($name)) {
//     echo "Name is empty";
//   } else {
//     echo $name;
//   }
// }
?>

</body>
</html>












<!-- <html>
<body>


<form method="GET" action="form.php">
  <lable>name: </lable> <input type="text" name="name">
  <lable>family : </lable> <input type="text" name="family">
  <lable>password : </lable> <input type="text" name="password">
<input type="submit">
</form> -->


<!-- <form method="GET" action="form.php">
  Name: <input type="text" name="name">
  <input type="submit">
</form> -->

<?php


// if ($_SERVER["REQUEST_METHOD"] == "GET") {
  
//    $name = $_GET['name'];
//    $family = $_GET['family'];
//    $password = $_GET['password'];
   
//    echo $name."<br>";
//    echo $family."<br>";
//    echo $password;
//   // if (empty($name)) {
//   //   echo "Name is empty";
//   // } else {
//   //   echo $name;
//   // }
// }
?>