<?php

function Hi($a,$b){
    $z = "1";
    for ( $x = 1 ; $x <= 9 ; $x++){
        for ($y = $a ; $y <= $b ; $y++){
            echo "$y*$x=" . $x*$y;
        }echo "<br>";
    }
}
Hi(2,4);
echo"<br>";
Hi(10,13);

echo "<br>";

function loop($a){
    $c = "1";
    for ($x = 1 ; $x <= $a ; $x++){
        for ($y = 1 ; $y <= $a ; $y++){
            if ($x>=$y){
                echo $c++;
            }
        }echo "<br>";
    }
}
loop(8) . "<br>";

echo "<br>";

function Hello($a,$b){
    $z = 0;
    for ( $x = $a ; $x <= $b ; $x++){
        $z = $z+$x;
        $z+=$x;
    }return $z;
}    
echo Hello(4,8);
echo "<br>";
echo Hello(1,10);    
     
echo "<br><br>";

$cars = array("Volvo","BMW","Toyota");
echo "I like " .$cars[0] . ", " . $cars[1] . " and " . $cars[2] . ". ";

echo "<br><br>";

$cars = Array("Volvo","BMW","Toyota");
$a = count($cars);
for ($x = 0 ; $x < $a ; $x++){
    echo $cars[$x];
    echo"<br>";
}
echo "<br><br>";

$num = Array(1,2,3,4,5,6,7,8,9,10);
$a = count($num);
for ($x = 0 ; $x < $a ; $x++){
    echo $num[$x];
    echo"<br>";
}
echo "<br><br>";

// 1,3,5,7,9
for ( $x = 0 ; $x < $a ; $x+=2){
    echo $num[$x];
    echo "<br>";
}