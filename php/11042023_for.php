<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="11042023_for.php" method="GET">
        <input type="text"id="num1"name="num1"
        value=0><br>
        <input type="text"id="num2"name="num2"
        value=0><br><br>
        <input type="submit"value="Submit">
    </form>

    <?php
    $sum = 0;
    for ($x=$_GET['num1'];$x<=$_GET['num2'];$x++){
        echo $x;
    }
    echo"<br>";
    $a = 0;
    for ($y=$_GET['num1'];$y<=$_GET['num2'];$y++){
        $a= $y+$a;
    }
    echo $a;

    echo"<br>";
    
    if ($_GET['num2']<= 10){
         echo "kid";
    }
    elseif($_GET['num2'] <= 30){
        echo "adult";
    }
    else{
        echo "old";
    }

    ?>
</body>
</html>