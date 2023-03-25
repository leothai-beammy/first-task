
<?php
// $x = "Hello Beammy!";
// $y = "From Thailand!";
// echo $x;
// echo "<br>";
// echo $y;
// echo "<br>";

// $x = 1234;
// var_dump ($x);
// echo "<br>";

// $x = 1234;
// echo $x;
// echo "<br>";


// $x = 5;
// $y = 5;
// echo $x + $y;
// echo "<br>";

// $x = 20;
// $y = 5;
// echo $x - $y;
// echo "<br>";

// $x = 5;
// $y = 1;
// echo $x * $y;
// echo "<br>";

// $x = 10;
// $y = 2;
// echo $x / $y;
// echo "<br>";

// $x = 20;
// $y = 5;
// echo $x % $y;
// echo "<br>";

// $x = 10;
// $y = 5;
// echo $x ** $y;
// echo "<br>";

$a = 100;
if ( $a < 30 ) {
    echo "I Can't Buy!";
}
else {
    echo "I can buy!";
}
echo "<br><br><br><br><br><br><br><br><br>";


$su = 20;

if ( $su >= 90 ) {
    echo "A";
}
elseif ( $su > 50 ) {
    echo "B";
}
else{
    echo "F";
}


echo "<br>";


$age = 50;
if ($age < 10 ) {
    echo "baby";
}
elseif ( $age <= 60 ){
    echo "young";
}
else {
    echo "Old";
}



$money = 100 ;
if ( $money <= 10 ) {
    echo "candy";
}
elseif ( $money <= 50 ) {
    echo "noodle";
}
elseif ( $money >= 100 ){
    echo "sushi";
}
echo "<br><br><br><br><br><br><br><br><br>";

$xdice = 3;
$ydice = 2;
if ( $xdice >= 4 && $ydice >= 4 ) {
    echo "win";
}
elseif ( $xdice >= 4 || $ydice >= 4 ) {
    echo "tie";
}
else {
    echo "lost";
}
    echo "<br><br><br><br>";


// for ( $x = 0 ; $x < 10 ; $x++ ) {
//     echo "the number is : Beammy <br>";
// }
//     echo "<br>";


// for ( $x = 1 ; $x <= 10 ; $x++ ) {
//     echo "the number is : $x : Beammy birth day is : 9 
//     <br><br>";
// }
//     echo "<br>";

for ( $x = 1 ; $x <= 9 ; $x++ ) {
    echo "the number is : $x : Beammy birth day is : 9 <br>";
}

for ( $x = 1 ; $x <= 9 ; $x++) {
    echo " 4 * $x ="  . $x * 4 ."<br>";
}
echo "<br>";

$sum = 0;
for ( $x = 2 ; $x <= 20 ; $x=$x+2 ) {
    $sum = $sum + $x; 
    
    echo "sum is $sum<br>";
}

?>