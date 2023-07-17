<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables y constante0</h1>
    <!---script php---> 
    <?php
    //1. la forma de representar las variables en php es anteponiendo el simbolo de "$" a la palabra que utilizaremos como variable. Ejemplo $edad*/
    /*2. debemos prestar atencion a las mayuscula y minusculas, ya que PHP reconoce la diferencia entre los dos. $valor es diferente que $VALOR*/
    /*3. para que se utilizan las variales? gracias a ellas podremos realizar operaciones aritmeticas y operaciones con cadena, etc. */
    /*4. las variables las utilizaremos como y cuando queramos en una misma pagina, ya que no existe limitacion en cuanto su uso*/
    /*5. haybque prestar atencion a no provocar error por utilizar como variables palabras reservadas ṕor el lenguaje. Ejemplo $os se genera error, porque es una variable predeterminada*/
    /*6: tambien se debe evitar el error de empezar una variable por un numero. Ejmplo $35var = 45 es un error*/
    /*En PHP no es necesario especificar el tipo de variable, pero si debemos saber cuando utilizar las comillas a la hora de definirlas, ya que su uso indicaria que se esta hablando de una cadena. Ejemplo $cuenta = 7, $nombre = "nestor"*/
    /*podemos mostrar las variables en pantalla de vvarias maneras: una de ellas puede ser utilizando la opcion echo(): otra puede ser mediante print()*/
    $a = 5;
    $b = "7";
    echo "<b><h1>";
    echo ($a);
    echo "<br>";
    echo ($b);
    echo "</b></h1>";


    define("colombia","bogota");
    define ("habitantes" ,7000000);
    ?>
</body>
</html>