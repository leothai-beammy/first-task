<?php
function familyname ($fname){
    echo "$fname Refsnes.<br>";
}
familyname("Jani");
familyname("Hege");
familyname("Stale");
familyname("Kai Jim");
familyname("Borge");

echo "<br>";

function familyBeammy($fname, $year){
    echo "$fname Refsnes Born in $year <br>";
}
familyBeammy ("Hege","1975");
familyBeammy ("Stale","1978");
familyBeammy ("Kai Jim","1983");

echo "<br>";

function loop ($a, $b){
    for ( $x = $a; $x <= $b ; $x++){
        echo "$x,";
    }
}
loop (1, 10);
echo "<br>";
loop (2, 8);

echo "<br>";

function Hello ($a, $b){
    for ( $x= 1 ; $x <= 9 ; $x++ ){
        for ( $y = $a ; $y <= $b ; $y++ ){
            echo "$y * $x =". $y*$x . "  ";
        }echo "<br>";
    }
}   
    Hello ( 2, 4 );
    echo "<br>";
    Hello ( 10, 13 );

echo "<br>";

function Sum ( $x, $y ){
    $a = $x + $y;
    return $a;
}
echo "5+10 =" . Sum (5, 10) . "<br>";
echo "7+13 =" . Sum ( 7, 13) . "<br>";
echo "2+4 =" . Sum ( 2, 4) . "<br>";

echo "<br>";

function a(int $x){
    if ($x>10){
        return "True";
    }
    else{
        return "False";
    }
}
echo "Please enter a number greater than 10 <br>";
echo a(10) . "<br>";
echo a(9) . "<br>";