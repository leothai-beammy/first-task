<?php

echo ("-----------");
echo ("My birth day is");
echo ("-----------");

echo"<br>";

function line (){
    echo "--------<br>";
}
line();
line();
line();
echo "Beammy";
line ();

echo"<br>";

function sum (int$x, int$y){
    $z = $x + $y;
    return $z;
}
echo "5+10=" . sum (5,10) . "<br>";
echo "7+13=" . sum ( 7,13) . "<br>";
echo "2+4=" . sum ( 2,4) . "<br>";

echo"<br>";

function Hello ($x,$y){
    $a = $x - $y;
    return $a;
}
echo "4-3=" . Hello (4,3) . "<br>";
echo "19-4=" . Hello (19,4) . "<br>";
echo "-10-40=" . Hello (-10,40) . "<br>";

echo"<br>";

function Hi($a,$b){
    for ( $x = 1 ; $x <= 9 ; $x++ ){
        for ( $y = $a ; $y <= $b ; $y++ ){
            echo "$y*$x=" . $x*$y ;
        }echo "<br>";
    } 
}
Hi (2,4); 
echo "<br>";
Hi (10,13);
echo "<br>";

echo "<br>";

function a( int$x){
    if ($x > 31 ){
        return "True";
    }
    else{
        return "False";
    }
}
echo "'Pleae enter a number greater than 31 . <br>";
echo a(31) . "<br>";
echo a(55) . "<br>";

echo "<br>";

function AM(int $b){
    $z = 1;
    for ( $x = 1 ; $x <= $b ; $x++) {
        for ( $y = 1 ; $y <= $b ; $y++){
            if ( $x >= $y ){
                echo $z++;
            }
        }
        echo "<br>";
    }
}
echo AM(10) . "<br>";