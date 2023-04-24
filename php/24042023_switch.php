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
   <input type="text" name="num1">
   <input type="text" name="num2">
   <input type="submit" value="Submit">
</form>
<?php 
function Hi($a){
    $b=1;
    for ($x=1;$x<=$a;$x++){
        for ($y=1;$y<=$a;$y++){
            if ($x>=$y){
            echo $b++;
            }
        }echo"<br>";
    }
}
Hi($_GET['num1'])."<br>";

echo"<br>";

function Hello($a){
    for ($x=1;$x<=$a;$x++){
        for ($y=1;$y<=$a;$y++){
            echo "$x,$y"." ";
        }echo"<br>";
    }
}
 Hello($_GET['num1']);

 echo"<br>";

function Say($a,$b){
    $c=0;
    for ($x=$a;$x<=$b;$x++){
        $c=$c+$x;
    }
    return $c;
}
echo Say($_GET['num1'],$_GET['num2']);

echo"<br>";

function Me($a){
    $b=1;
    for ($x=1;$x<=$a;$x+=2){
        for ($y=1;$y<=$a;$y++){
            if($x>=$y){
                echo $b;
            }else{
                echo "only even numbers can be used"."<br>";
            }
        }echo"<br>";
    }
}
Me($_GET['num1']);
?>
</body>
</html>


