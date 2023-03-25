<?php

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