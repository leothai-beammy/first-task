
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
        <input type="text"id="fname"name="fname"
        value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text"id="lname"name="lname"
        value="Doe"><br><br>
        <input type="submit"value="Submit">
    <form>


    <h1>Receive data and print it on the screen</h1>
    <h2>Receive data and print it on the screen</h2>
    <h3>Receive data and print it on the screen</h3>
    <form method="GET" action="finalPHP1.php">
        name: <input type="text"name="name"/><br/>
        age: <input type="text"name="age"/><br/>
        height: <input type="text"name="height"/><br/>
        job: <input type="text"name="job"/><br/>
        <input type="submit"name="submit"/>
    </form>
    <h4>the data entered is as follows.</h4>
    <?php
        echo "name: " .$_GET['name']."<br/>";
        echo "age: " .$_GET['age']. "<br/>";
        echo "height: " .$_GET['height']. "<br/>";
        echo "job: " .$_GET['job']. "<br/>";
    ?><br/><br/>

    <form action="10042023_for.php" method="get">
        num1= <input type="text"name="sum1"/><br/>
        num2= <input type="text"name="sum2"/><br/>
        <input type="submit"name="submit"/>
    </form>

    <?php
   
    for ($x=$_GET['sum1']; $x<=$_GET['sum2']; $x++){
        echo $x;
    }
    echo"<br>";

    
   

     ?>

</body>
</html>
    

