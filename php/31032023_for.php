<?php

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        echo "  *  " ;  $x * $y  ;
    }
    echo "<br>" ;
}
echo "<br>" ;

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        echo "  $x  " ;
    }
    echo "<br>" ;
}
echo "<br>" ;

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        echo  " $y" ;
    }
    echo "<br>" ;
}
echo "<br>" ;

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        echo  $y  +  $x . "   " ;  
    }
    echo "<br>" ;
}
echo "<br>" ;

for ( $x = 1 ; $x <= 9 ; $x++ ) {
    for ( $y = 2 ; $y <= 4 ; $y++ ) {
        echo  " $y * $x = " . $x * $y . "   ";  
    }
    echo "<br>" ;
}
echo "<br>" ;

for ( $x = 2 ; $x <= 4 ; $x++ ) {
    for ( $y = 1 ; $y <= 9 ; $y++ ) {
        echo  " $x * $y = " . $y * $x . "   ";  
    }
    echo "<br>" ;
}
echo "<br>" ;

for ( $x = 1 ; $x <= 4 ; $x++ ) {
    for ( $y = 1 ; $y <= 4 ; $y++ ) {
        echo  " ( $x, $y )  " . "   ";  
    }
    echo "<br>" ;
}
echo "<br>" ;

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        if ( $x >= $y ) {
        echo  " * "  ;  
        }
    }
    echo "<br>" ;
}
echo "<br>" ;

for ( $x = 1 ; $x <= 3 ; $x++ ) {
    for ( $y = 1 ; $y <= 3 ; $y++ ) {
        if ( $x >= $y ) {
            echo "  *  " ;
        }
    }
    echo "<br>" ;
}
echo "<br>" ;

$a = 1 ;
for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        if ( $x >= $y ) {
            echo $a . "  "; 
            $a++ ;
        }
    }
    echo "<br>" ;
}
echo "<br>" ;

for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        if ( $y >= $x ) {
            echo " * " . "  " ;
        }
    }
    echo "<br>";
}
echo "<br>";

for ( $x = 5 ; $x >= 1 ; $x-- ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        if ( $x >= $y ) {
            echo " * " . "  " ;
        }
    }
    echo "<br>";
}
echo "<br>";

for ( $x = 3 ; $x >= 1 ; $x-- ) {
    for ( $y = 1 ; $y <= 3 ; $y++ ) {
        if ( $x >= $y ) {
            echo " * " . "  " ;
        }
    }
    echo "<br>" ;
}
echo "<br>" ;

$a = 1 ;
for ( $x = 3 ; $x >= 1 ; $x-- ) {
    for ( $y = 1 ; $y <= 3 ; $y++ ) {
        if ( $x >= $y ) {
            echo  $a . "  " ;
            $a++ ;
        }
    }
    echo "<br>" ;
}