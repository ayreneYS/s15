<?php

//VARIABLES//

$message = "Hello!"; 
$name = "Ays";
$count = 10;
$size = 2;
$quantity = 5;
$price = 1.99; //float

// variables: Boolean & Null
$is_admin = true;
$data = null;

/*
// variables: String, float & Integer 
echo $message;
echo "Hello world!";

var_dump($message);
var_dump($count);
var_dump($price);

var_dump($is_admin, $data);

var_dump($count + 5);
var_dump($count + $size);
var_dump($price + $quantity);
echo $message . " " . $name;

///////////////////////////////////////
// Type Juggling
$price1 = '150';

$price1 = $price1 + $quantity;

var_dump($price1);

// Boolean value
$is_editor = true;
$is_admin = false;

// and, or, &&, ||, !
var_dump($is_editor or $is_admin);


// separate using /n & '' or ""
$start = "3 o'clock";
$end = '4 o\'clock';
$days = "Monday\nTuesday\nWedenesday";

echo $start,$end;
echo $days;

// concatenate
echo "Hello $name";

////////////////////////////////////////
// ARRAYS //

//2 methods
$articles2 = array("First","Second","Third");
$articles = [
  1       => "First",
 "second" => "Second",
  "third" => "Third"
]; // string index = "first" =>


// echo $articles[0];
var_dump($articles);
// var_dump($articles["second"]);


/////////////////////////////////////////
$values = [
  "message" => "Hello!",
  "count"   => 150,
  "pi"      => 3.14,
  "status"  => false,
  "result"  => null
];

// $values = [$price, $count];
var_dump($values);

///////////////////////////////////////
// multidimentional array
$people = [
[ "name"   => "Alice",
  "email"  => "alice@example.com",
  "height" => 1.80
],
[ "name"   => "Bob",
  "email"  => "bob@example.com",
  "height" => 1.67
],
[ "name"   => "Carol",
  "email"  => "carol@example.com",
  "height" => 1.74
]
];

$alice_email = $people[0]["email"];

var_dump($people);
echo $alice_email;


// loops
$people = [ 
  "name"   => "Alice",
  "email"  => "alice@example.com",
  "height" => 1.80
];

// foreach ($people as $peep) {
//     echo $peep, ", ";
// };

foreach ($people as $index => $peep) {
  echo $index . ' - ' . $peep, ", ";
}

///////////////////////////////////////////
// if

// $articles = [];
$articles = ["First","Second","Third"]; // if condition become false


var_dump(empty($articles));

if (false){
  echo "The condition is true";
};

if (empty($articles)){
  echo "The array is empty";
} else {
  echo "The array is not empty";
}

// elseif

$hour = 21;

if ($hour < 12) {
  echo "Good morning";
} elseif ($hour < 18) {
  echo "Good afternoon";
} elseif ($hour < 22) {
  echo "Good evening";
} else {
  echo "Good night";
}


///////////////////////////////////////////
//  Comparison Operators
// ==, !=, <, >, <=, >=

$age =24;

if($age >= 18){ 
  echo "Condition is true";
} else {
  echo "Condition is false";
}

////////////////////////////////////////////
// While Loops

$month = 1;

while ($month <= 12){
  echo $month . ", ";
  $month = $month + 1;
}

For Loops

for ($i = 1; $i <= 10; $i += 1){ // $i++
  echo $i . ", ";
}
*/
////////////////////////////////////////////
// The Switch Statement
$day = "33";

switch ($day) {
  case "Mon":
    echo "Monday";
    break;
  case "Tue":
    echo "Tuesday"; 
    break;
  case "Wed":
    echo "Wednesday";
    break;
  case "Thu":
    echo "Thursday";
    break;
  case "Fri":
    echo "Friday";
    break;
  case "Sat":
    echo "Saturday";
    break;
  case "Sun":
    echo "Sunday"; 
    break;
  default:
    echo "No Information available for that day.";
    break;
}