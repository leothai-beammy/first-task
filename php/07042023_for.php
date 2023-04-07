<?php

function Hi($x,$b){
    $a = "0";
    $a = $x-$b ;
    echo "<br>";
    return $a;
}

echo "4-3=" . Hi(4,3);
echo "19-4=" . Hi(19,4);
echo "-10-40=" . Hi(-10,40);

echo "<br>";

function Hello ($x){
    if ($x > 10){
        return "True";
    }
    else{
        return "False";
    }
}
echo "Please enter a number greater than 10 <br>";
echo Hello(7.99888). "<br>";
echo Hello(55) . "<br>";

echo "<br>";

function AA($a,$b){
    for ( $x = 1 ; $x <= 9 ; $x++){
        for ($y = $a ; $y <= $b ; $y++){
            echo "$y*$x=" . $x*$y; 
        }echo "<br>";
    }
}
echo AA(2,4);
echo "<br>";
echo AA(10,13);
echo "<br>";
echo AA(9,15);

echo "<br>";


function loop($z){
    $b = "1";
    for ( $x = 1 ; $x <= $z ; $x++){
        for ( $y = 1 ; $y <= $z ; $y++){
            if ( $x>=$y){
                echo $b++;
            }
        }echo "<br>";
    }
}
echo loop(8) . "<br>";

echo "<br>";

function sum($a){
    $b = "0";
    for ( $x = 1 ; $x <= $a ; $x++){
        $b = $x+$b;
    }
    echo "<br>";
    return $b;
}
echo sum (6); 
echo sum (4); 
echo sum (35); 
echo sum (345); 
echo sum (15); 
