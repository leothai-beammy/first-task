<?php

for ( $x = 1 ; $x <= 9 ; $x++ ) {
    for ( $y = 2 ; $y <= 4 ; $y++ ) {
        echo " $y * $x = " . $x * $y . "  " ;
    }
    echo "<br>";
}
echo "<br>";

for ( $x = 1 ; $x <= 4 ; $x++ ) {
    for ( $y = 1 ; $y <= 4 ; $y++ ) {
        echo " ( $x , $y ) " . "  ";
    }
    echo "<br>";
}
echo "<br>";

$a = 1 ;
for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        if ( $x >= $y ) {
            echo $a++ ;
        }
    }
    echo "<br>";
}
echo "<br>";

$a = 1;
for ( $x = 3 ; $x >= 1 ; $x-- ) {
    for ( $y = 1 ; $y <= 3 ; $y++ ) {
        if ( $x >= $y ) {
            echo  $a++ . "  ";
        }
    }
    echo "<br>";
}
echo "<br>";

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        if ( $x >= $y ) {
            echo " * ";
        }else{ 
            echo " @ ";
        }
    }
    echo "<br>";
}
echo "<br>";

$a = "a";
$b = "1";
for ( $x = 1 ; $x <= 4 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        if ( $x >= $y ) {
            echo  $a++ ;
        }else{
            echo  $b++ ;
        }
     }
     echo "<br>";
 }
 echo "<br>";

 for ( $x = 5 ; $x >= 1 ; $x-- ){
    for ( $y = 1 ; $y <= 5 ; $y++ ){
        if ( $x >= $y ){
            echo " * ";
        }else{
            echo " @ ";
        }
     }
     echo "<br>";
 }
 echo "<br>";

 $a = "A";
 $b = "1";
 for ( $x = 3 ; $x >= 1 ; $x-- ){
    for ( $y = 1 ; $y <= 4 ; $y++ ){
        if ( $x >= $y ){
            echo $b++;
        }else{
            echo $a++;
        }
    }
    echo "<br>";
 }
 echo "<br>";

 $a = "A";
 $b = "0";
 for ( $x = 3 ; $x >= 1 ; $x-- ){
    for ( $y = 1 ; $y <= 3 ; $y++ ){
        if ( $x >= $y ){
            echo $a++;
        }else{
            echo $b++;
        }
    }
    echo "<br>";
 }
 echo "<br>";

 $sum = 0;
 for ( $x = 2 ; $x <= 20 ; $x+=2 ){
    $sum = $sum + $x;
} 
echo ("Sum is" . +$sum ) ;

echo "<br>";
 
 $colors = array ( "red","green","blue","yellow");
 foreach ( $colors as $value){
    echo "$value <br>";
 }