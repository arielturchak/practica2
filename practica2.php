<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica2</title>
</head>

<body>
    <?php
    echo "EJERCICIO 1-A";
    $var1 = "Hola";
    $var2 = "Mundo";
    $var3 = $var1 . " " . $var2;
    echo "<br>";
    echo $var3;
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 1-B";
    $Dni = true;
    is_bool($Dni);
    echo "<br>";
    echo $Dni;
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 1-C";
    $var_float = 3.14;
    echo "<br>";
    echo $var_float;
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 1-D";
    $array1 = array("clave1" => "1", "clave2" => "2", "clave3" => "3");
    echo "<br>";
    print_r($array1);
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 2";
    $Dni = false;
    is_bool($Dni);
    echo "<br>";
    echo $Dni; //no aparece nada ya que el valor de false es 0, por lo tanto no iprime nada en pantalla.
    
    echo "EJERCICIO 3";
    $var3 = str_replace(" ", "", $var3); // " " lo que quiero reemplazar y "" por lo que quiero reemplazar
    echo "<br>";
    echo $var3;
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 4";
    $vartexto = "El operador \"+\" sirve para sumar el valor de variables. Con la \"/\"podemos
       dividir valores entre variables. El símbolo del dólar \"$\" indica que estamos
       utilizando variables pero no lo usaremos en las constantes o globales."; // colocamos la barra entre las comillas y el objeto
    echo "<br>";
    echo $vartexto;
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 5";
    echo "<br>";
    echo strlen($vartexto);
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 6";
    $var4 = "Hello World";
    $array_vocales = array("e", "o");
    $var5 = str_replace($array_vocales, "", $var4);
    echo "<br>";
    echo $var5;
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 7";
    echo "<br>";
    $var_edad;
    echo empty($var_edad); // con este operador logico al salir un 1 nos quiere decir que es true, por lo tanto nos afirma que esta vacío
    // la variable varedad esta declarada sin asignarle ningun valor.
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 8";
    echo "<br>";
    echo intval($var4); //con este método podemos convertir cualquier tipo de variable que pasemos por parametro en un entero, y sale 0 porque la cadena de texto no puede ser interpretada como un numero valido.
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 9-A";
    echo "<br>";
    $numero = 144;
    $var_raiz = sqrt($numero);
    echo $var_raiz;
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 9-B";
    echo "<br>";
    $numero = 2;
    $potencia = 8;
    $numero_elevado = pow($numero, $potencia);
    echo $numero_elevado;
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 9-C";
    echo "<br>";
    $var_divisor = 100;
    $var_dividendo = 6;
    echo $resto = $var_divisor % $var_dividendo;
    echo "<br>";
    echo "<br>";

    echo "EJERCICIO 9-D";
    echo "<br>";
    $numero1 = 3;
    $numero2 = 6;
    $array_div_numero1 = []; // para almacenar los divisores comun de 3
    $array_div_numero2 = []; // para almacenar los divisores comun ded 6 
    //Utilizo dos bucles for  para averiguar los divisores comunes de 3 y 6, 
    //luego con el metodo array push almacenarlos en un array diferente los divisores comun de 3 y 6 
    for ($i = 1; $i <= $numero1; $i++) {
        if ($numero1 % $i == 0) {
            array_push($array_div_numero1, $i);
        }
    }
    for ($j = 1; $j <= $numero2; $j++) {
        if ($numero2 % $j == 0) {
            array_push($array_div_numero2, $j);

        }
    }
    echo "<br>";
    //Imprimo por pantalla para ver que tengo en cada array
    echo "Divisores comunes de $numero1: " . implode(", ", $array_div_numero1);
    echo "<br>";
    echo "<br>";
    echo "Divisores comunes de $numero2: " . implode(", ", $array_div_numero2);

    //Ahora quiero tener en un array los maximos comun divisores de 3 y 6
    //la interseccion de los arrays_div_numero1 y array_div_numero2
    echo "<br>";
    echo "<br>";
    $elementos_comunes = array_intersect($array_div_numero1, $array_div_numero2);
    echo "Elementos comunes de los dos arrays: " . implode(", ", $elementos_comunes);
    //busco el valor maximo 
    $max_comun_divisor = max($elementos_comunes);
    echo "<br>";
    echo "<br>";
    echo "El máximo común divisor de $numero1 y $numero2 es: " . $max_comun_divisor;
    ?>
</body>

</html>