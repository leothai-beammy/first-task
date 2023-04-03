<?php

$a = 1;
for ( $x = 1 ; $x <= 5 ; $x++ ) {
    for ( $y = 1 ; $y <= 5 ; $y++ ) {
        if ( $x >= $y ){
            echo $a++ ;
        }
    }
    echo"<br>";
 }
 echo"<br>";

 $a = "A";
 for ( $x = 3 ; $x >= 1 ; $x-- ){
    for ( $y = 1 ; $y <= 3 ; $y++ ){
        if ( $x >= $y ){
            echo $a++ ;
        }
    }
    echo"<br>";
 }
 echo"<br>";

 $a = "a";
 $b = "1";
 for ( $x = 1 ; $x <= 4 ; $x++ ){
    for ( $y = 1 ; $y <= 5 ; $y++ ){
        if ( $x >= $y ){
            echo $a++;
        }else{
            echo $b++;
        }
    }
    echo"<br>";
 }
 echo"<br>";

 $a = "A";
 $b = "1";
 for ( $x = 3 ; $x >= 1 ; $x-- ){
    for ( $y = 1 ; $y <= 4 ; $y++ ){
        if ( $x < $y ){
            echo $a++;
        }else{
            echo $b++;
        }
    }
    echo"<br>";
}
echo"<br>";

 $age = array("Daunbi"=>"21","Beammy"=>"35","Lecen"=>"50");
 foreach ($age as $x => $val) {
    echo "$x = $val<br>";
 }
 echo"<br>";

 for ( $x = 0 ; $x < 10 ; $x++ ){
    if ( $x == 6 ){
        break;
    }
    echo "The number is : $x <br>";
 }
 echo"<br>";

 for ( $x = 10 ; $x > 1 ; $x-=2 ){
    if ( $x == 2 ){
        break;
    }
    echo "The number is : $x<br>";
 }
 echo"<br>";

 for ( $x = 10 ; $x > 0 ; $x-- ){
    if ( $x == 5 ){
        continue;
    }
    echo "The number is : $x<br>";
 }
 echo"<br>";

 $x = 0;
while ( $x < 10 ){
    if ( $x == 4 ){
        $x++;
        continue;
    }
    echo "The number is : $x<br>";
    $x++;
}
echo"<br>";

function familyname ($x) {
    echo "$x Pokkaew<br>";
}
familyname("Wasana");
familyname("Sarocha");
familyname("Natee");
familyname("Janpeang");

echo"<br>";

function MyPhp($num1,$num2){
    echo $num1,$num2."<br>";
}
function sum ( $num1,$num2){
    echo $num1+$num2."<br>";
}
    MyPhp("Hello","World");
    sum (10,20);
    sum (10,20.256);