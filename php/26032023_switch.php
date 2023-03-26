<?php

// $x = 5; 
// if ( $x < 7 ) {
//     echo "Baby!";
//    }elseif ( $x < 22 ) {
//     echo "School!";
//     } else {
//         echo "Work!";
//     }
// echo "<br>";

$age = 25;
switch ($age) {
    case $age < 7 :
        echo "Baby" ;
        break;
    case $age < 22 :
        echo "School" ;
        break;
    default:
        echo "work";
    }

    ?>