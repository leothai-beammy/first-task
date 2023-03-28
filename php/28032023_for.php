<?php

for ( $x = 2 ; $x <= 9 ; $x++ ) {
    for ( $y = 1 ; $y <= 9 ; $y++ ) {    
        if($x > $y  ){
            echo " $x * $y = " . $x * $y . "<br>" ;
        }
    }
    echo "<br>";  

}
echo "<br>";