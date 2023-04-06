<?php

function sum($x,$y){
    $a = $x + $y;
    return $a;
}
echo "5+10=" . sum(5,10) . "<br>";
echo "7+13=" . sum(7,13) . "<br>";
echo "2+4=" . sum(2,4) . "<br>";

echo"<br>";

function Hi($x,$y){
    $a = $x - $y;
    return  $a;
}
echo "4-3=" . Hi(4,3) . "<br>";
echo "19-4=" . Hi(19,4) . "<br>";
echo "-10-40=" . Hi(-10,40) . "<br>";

echo"<br>";

function Hello($x){
    if ( $x > 10){
        return "True";
    }
    else{
        return "False";
    }
}
echo "Please enter a number greater than 10 <br>";
echo Hello(7.99888) . "<br>";
echo Hello(55) . "<br>";

function loop( $a,$b){
    for ($x = 1 ; $x <= 9 ; $x++){
        for ($y = $a ; $y <= $b ; $y++){   
        echo "$y*$x=" . $x*$y;
        }echo "<br>";
    }
}
echo loop(2,4);
echo"<br>";
echo loop(10,13);

echo"<br>";


function z($b){
    $a = "1";
    for ($x = 1 ; $x <= 5 ; $x++){
        for ($y = 1 ; $y <= 5 ; $y++){
            if  ($x >= $y) {
                echo $a++; 
            }
        }echo "<br>";
    }
}
echo z(5);

echo "<br>";

function B($b){
    $a = 0 ;
    for ( $x = 1 ; $x <= $b ; $x++){
        $a=$a+$x;
    }
    return $a;
}
echo B(5);

echo "<br>";

function AA($c,$z){
    $a = 0;
    for ( $x = $c ; $x <= $z ; $x++){
        $a = $a+$x;
    }
    return $a;
}
echo AA(4,8);