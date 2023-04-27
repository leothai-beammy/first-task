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
    if ($a%2==0){
        echo "num is even"; 
        for($y=1;$y<=$a;$y++){
            echo"*";
        }
    }else{ 
        echo "num is odd";
        for($x=1;$x<=$a;$x++){
            echo"*";
        }
    }
}
echo Hi($_GET['num1']);


?>
</body>
</html>

