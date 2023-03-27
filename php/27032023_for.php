<?php

// for ( $x = 2 ; $x <= 4 ; $x++ ) {
//     for ( $y = 1 ; $y <= 9 ; $y++ ) { 
//         if($x == $y){
//             echo "<b> $x * $y = " . $x * $y . "</b><br>" ;
//         } else {
//             echo " $x * $y = " . $x * $y . "<br>" ;
//         } 
//     }
//     echo "<br>";
// }
// echo "<br>";

for ( $x = 2 ; $x <= 4 ; $x++ ) {
    for ( $y = 1 ; $y <= 9 ; $y++ ) { 
        if($x*2 == $y){
            echo "<b> $x * $y = " . $x * $y . "</b><br>" ;
        } else {
            echo " $x * $y = " . $x * $y . "<br>" ;
        }
        
    }
    echo "<br>";
}
echo "<br>";