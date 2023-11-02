<?php

//Getting the Current Date and Time:
//echo "Current date and time: " . date("Y-m-d H:i:s"). "<br>";

//jdate ?? jalali date 
//echo date("H:i:s");

//Formatting a Specific Date:
//$timestamp = strtotime("1990-01-15 14:30:01");

//echo $timestamp; //10004508568 to database

//echo date("Y-m-d H:i:s", $timestamp);


//getting the current year
//echo "Current year: " . date("Y");


 //echo "Current month: " . date("Ymd"); 

//Calculating Future Dates:
//$strTotimeNextWeek = strtotime("+1 month +1 year +1 day"); //week , year , day
// $strTotimeNextWeek = strtotime("+1 week");
// echo $strTotimeNextWeek;   

// $futureDate = date("Y-m-d", $strTotimeNextWeek);
// echo "One week from now: " . $futureDate;


//Calculating Time Differences:
// $start = strtotime("2023-01-01 12:00:00"); //timestamp
// $end = strtotime("2023-01-01 15:30:00"); //timestamp 
// $difference = $end - $start;
// echo "Time difference: " . date("H:i:s", $difference);



//Displaying the Day of the Week:
// $dayOfWeek = date("l", strtotime("2023-11-02"));
// echo "Day of the week: " . $dayOfWeek;

//Converting Timestamps to Dates:
// $timestamp = 1609459200; // January 1, 2021
// echo "Date from timestamp: " . date("Y-m-d", $timestamp);


//Customizing Timezone:
//date_default_timezone_set("America/New_York");
// date_default_timezone_set("Asia/Tehran");
// echo "Current time in Tehran: " . date("H:i:s");


// //Using DateTime Object (Object-Oriented Approach):
// $date = new DateTime("2023-05-20");
// echo "Formatted date: " . $date->format("Y-m-d");


// //mktime
 //$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
// // $hour: The hour (0-23).
// // $minute: The minute (0-59).
// // $second: The second (0-59).
// // $month: The month (1-12).
// // $day: The day of the month (1-31).
// // $year: The year (e.g., 2023).

// #January 1, 1970, at 00:00:00 UTC

 $timestamp = mktime(14, 30, 0, 1, 15, 2023); // January 15, 2023, 14:30:00
 echo "Unix timestamp: " . $timestamp;
