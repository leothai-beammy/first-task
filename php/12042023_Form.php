<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <input type="submit" value="Submit">
    </form>
    <?php
    function sum($a,$b){
        $c = 0;
        $c = $a+$b;
        return $c;
    }
    echo $_GET['num1']."+".$_GET['num2']."=". sum($_GET['num1'],$_GET['num2']) ."<br>";

    function sum1($a,$b){
        $c = 0;
        $c = $a+$b;
        echo "$a+$b=".$c."<br>";
    }
    sum1($_GET['num1'],$_GET['num2']) ;
    
    function Hi($a,$b){
        // $c = 1;
        for ($x = 1 ; $x <= 9 ; $x++){
            for ($y = $_GET['num1'] ; $y <= $_GET['num2'] ; $y++){
            echo "$y*$x=" .$y*$x;
        }echo"<br>";
    }
}
  Hi($_GET['num1'],$_GET['num2']) . "<br>";

    $a = 0;
    for ($x = $_GET['num1']; $x <= $_GET['num2']; $x++){
         $a= $a+$x;
    }echo"<br>";
echo "sum is = " . $a ;

   ?>


</body>
</html>