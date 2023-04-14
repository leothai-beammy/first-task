<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <label for="fname">first name:</label><br>
    <input type="text"id="fname" name="num1"
    value="0"><br>
    <label for="lname">Last name:</label><br>
    <input type="text"id="lname" name="num2"
    value="0"><br><br>
    <input type="submit" value="Submit">
</form>
<?php
function Hi($a,$b){
    $c = 0;
    for ($x = 1 ; $x <= 9 ; $x++){
        for ($y = $a ; $y <= $b ; $y++){
            echo "$y*$x= " . $y*$x;
        }echo"<br>";
    }
}
Hi($_GET['num1'], $_GET['num2']) . "<br><br>";

    $a = 0;
    for ($x = $_GET['num1'] ; $x <= $_GET['num2'] ; $x++){
        $a = $a+$x;
    }echo"<br>";
echo "sum is = " . $a;

echo"<br><br>";

    if ($_GET['num2']<=90){
        echo "small";
    }
    elseif($_GET['num2']<=150){
        echo "medium";
    }
    else{
        echo "large";
    }
    echo"<br><br>";

    if ($_GET['num2']>=90){
        echo "A";
    }
    elseif ($_GET['num2']>=80){
        echo "B";
    }
    elseif ($_GET['num2']>=70){
        echo "C";
    }
    elseif ($_GET['num2']>=60){
        echo "D";
    }
    else{
        echo "E";
    }
    echo"<br><br>";

    function XX($a){
       for ($x = 1 ; $x <= $a ; $x++){
            echo "php <br>";
       }
    }
    XX($_GET['num1']);
   

?>

</body>
</html>