<?php

for ( $x = 1 ; $x <=10 ; $x+=2 ) {
    echo "( $x ) beammy birth day is = 9 <br>" ;
}
echo "<br>";

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        echo " * " ;
    }
    echo "<br>";
}
echo "<br>";

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        echo "    $x    " ; 
    }
    echo "<br>";
}
echo "<br>";

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        echo "  $y "; 
    }
    echo "<br>";
}
echo "<br>";

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        echo  $y + $x . "  "  ; 
    }
    echo "<br>";
}
echo "<br>";

for ( $x = 1 ; $x <= 9 ; $x++ ) {
    for ( $y = 2 ; $y <= 4 ; $y++ ) {
        echo  " $y * $x = " . $x * $y . "\t" ; 
    }
    echo "<br>";
}
echo "<br>";

for ( $x = 2 ; $x <= 4 ; $x++ ) {
    for ( $y = 1 ; $y <= 9 ; $y++ ) {
        echo  " $x * $y = " . $x * $y ; 
    }
    echo "<br>";
}