<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>estructura de control</h1>
    <?php
    // if
    // if-else
    // while
    // do-while
    // for
    // require
    // include
    // switch
    
     echo "<hr>";
    //ejemplo 1

    $color = "rojo";
    if($color = "rojo");
    {
        print("efectivamente, el color es rojo");
    }
    //ejemplo 2
   
    echo "<hr>";
    $x = 10;
    $y = 15;
    if($x == $y)
    {
        print("x es igual que y");
    }
    elseif($x > $y)
    {
        print("x es mayor que y");
    }
    elseif($x < $y)
    {
        print("x es menor que y");
    }
    //ejemplo 3 
    echo "<hr>";
    while(--$x)
    {
        echo "<big>";
        echo "<b>";
        print ("numero:".$x);
        echo "<br>";
        echo "<hr>";
    }
    //ejemplo 4
    
    echo "<hr>";
    for($x=5; $x<=10; $x++);
    {
        print("numero: ".$x."<br>");
    }
    include("variable.php");
    echo "<br>";
    print("$x"."$z"."$y");

        //ejemplo 5
        echo "<br>";
        echo "<h1>switch</h1>";
        $color = "negro";
        switch($color)
        {
            case"blanco";
                $sector = "claro";
                break;
            case"naranja";
                $sector = "normal";
                break;
            case"negro";
                $sector = "oscuro";
                break;
        }
        print($sector);
    ?>


</body>
</html>