<?php

function Hi($a,$b){
    $c = "0";
    for ($x = 1; $x <= 9 ; $x++){
        for ($y = $a ; $y <= $b ; $y++){
            echo "$y*$x=" . $x*$y;
        }echo "<br>";
    }
}
Hi(2,4);
echo"<br>";
Hi(10,13);

echo"<br>";

function Hello($a){
    $b = "1";
    for ($x = 1 ; $x <= $a ; $x++){
        for ($y = 1 ; $y <= $a ; $y++){
            if ($x>=$y){
                echo $b++;
            }    
        }echo"<br>";
    }
}
Hello(8)."<br>";

echo "<br><br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>HTML Forms</h2>
<form action="">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"
    value="John"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"
    value="Doe"><br><br>
    <input type="submit" value="Submit">
</form>
<p>If you click the "Submit"botton, the form-data will be sent to a page called "/action_page.php".</p>
</body>
</html>