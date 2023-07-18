<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>operadores</h1>
    <?php
    //operadores aritmeticos
    //operadores de comparacion
    //operadores logicos
    //operadores de union de cadenas
    ?>
    <h1>operadores aritmeticos</h1>
    <?php

    $num1 = 1;
    $num2 = 5;


    $suma = $num1 + $num2;

    echo "<p>Primer número: $num1</p>";
    echo "<p>Segundo número: $num2</p>";
    echo "<h2>Resultados:</h2>";
    echo "<p>Suma: $suma</p>";
    ?>

<h1>Operadores de Comparación</h1>

<?php
$num1 = 5;
$num2 = 5;

$igual = ($num1 == $num2);
$distinto = ($num1 != $num2);
$mayor = ($num1 > $num2);
$menor = ($num1 < $num2);


    echo "<p>Primer número: $num1</p>";
    echo "<p>Segundo número: $num2</p>";
    echo "<h2>Resultados:</h2>";
    echo "<p>igual: " . ($igual ? 'verdadero' : 'falso') . "</p>";
    echo "<p>diferentes: " . ($distinto ? 'verdadero' : 'falso') . "</p>";
    echo "<p>mayor: " . ($mayor ? 'verdadero' : 'falso') . "</p>";
    echo "<p>menor: " . ($menor ? 'verdadero' : 'falso') . "</p>";
    ?>

<h1>operadores logicos</h1>


<h1>operadores de union de cadenas</h1>

<?php
    $cadena_1 = "Hola";
    $cadena_2 = "mundo";

    $union = $cadena_1 . " " . $cadena_2;

    echo "<p>palabra 1: $cadena_1</p>";
    echo "<p>palabra 2: $cadena_2</p>";
    echo "<h2>Resultado de la unión:</h2>";
    echo "<p>union : $union</p>";
    ?>
   


</body>
</html>