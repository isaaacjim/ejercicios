<?php

//Arrays
//Crear variable de nombre arrayVacio cuyo valor sea un array vacío.
$arrayVacio = array();
//Crear variable de nombre arrayNumeros declarada con un array de números del 0 al 9 (0, 1, 2...).
$arrayNumeros = array(1,2,3,4,5,6,7,8,9);
//Crear variable de nombre arrayNumerosPares declarada con un array con los números pares del 0 al 9 (considerando al 0 par).
$arrayNumerosPares= array(0,2,4,6,8);
//Crear variable de nombre arrayBidimensional declarada con valor array [[0, 1, 2], ['a', 'b', 'c']].
$arrayBidimensional = array([[0, 1, 2], ['a', 'b', 'c']]);
//Crear variable de nombre arrayNumerosNeg declarada con un array de números del 0 al -9 (0, -1, -2...).
$arrayNumerosNeg = array(0, -1, -2, -3, -4, -5, -6, -7, -8, -9);
//Crear variable cuyo valor sea un array asociativo con las clases-valores: nombre-tu nombre, apellido- tu apellido y edad- tu edad.
$array = array(
    "Nombre" => "Isaac",
    "Apellido" => "Jimenez",
    "Edad" => 25;
);
//Crear variable de nombre loGuardoTodo declarada con valor array con valores 'hola', 'que', 23, 42.33 y 'tal'.
$loGuardoTodo = array("hola", "que", 23, 42.33, "tal");
//Crear variable de nombre arrayDeArrays declarada con valor array: [[756, 'nombre'], [225, 'apellido'], [298, 'direccion']].
$arrayDeArrays = array([[756, 'nombre'], [225, 'apellido'], [298, 'direccion']])
//Funciones
//Crea la función suma que acepte como argumento dos números y devuelva el resultado de su suma.
$num1 = 1;
$num2 = 2;

function suma($num1, $num2){
    return $num1 + $num2;
}

$resultado = suma($num1, $num2);
//Crea la función potenciacion que acepte como argumento dos números y devuelva el resultado de elevar el primero(a) al segundo(b) (a^b).
function potenciacion($num1, $num2){
    return $num1^$num2;
}
$resultado2 = potenciacion($num1, $num2);
//Crea la función separarPalabras que acepte como argumento un string y devuelva un array de palabras 'hola mundo' => [hola, mundo].
function separarPalabras($frase){
    return array("hola mundo")
    
}
echo separarPalabras($frase);
//Crea la función repetirString que acepte como argumento un string y un número y devuelva un string que sea el resultado de concatenar el primer string el número dado de veces.
$string = "hola";
$num10; 5;
function repetirString($string, $num10){
    return $string . $string . $string . $string . $string;
}
echo repetirString($string);
//Crea la función esPrimo que acepte como argumento un número y devuelva true si es primo y false si no lo es.
function esPrimo($num10){
    return if($num10 = int){
        return true;
    } else {
        return false;
    }
}

echo esPrimo($num10);
//Crea la función multiplicacion que acepte como argumento dos números y devuelva el resultado de su multiplicación.
$num20 = 5;
$num21 = 6;
function multiplicacion($num20, $num21){
    return $num20 * $num21;
}
echo multiplicacion($num20, $num21);
//Crea la función división que acepte como argumento dos números y devuelva el resultado de su división.

function division($num20, $num21){
    return $num20 / $num21;
}
echo division($num20, $num21);
//Crea la función esPar que acepte como argumento un número y devuelva true si es par y false si es impar.
function esPar($num20){
    return if($num20 % 2 == 0){
        echo true;
    }else {
        echo false;
    }
}
//Crea el array arrayFunciones que tenga como valor las funciones: suma, resta y multiplicación (todas aceptan 2 números como argumento y devuelve el resultado de su operación).
$arrayFunciones = array(
    "suma" => "suma",
    "resta" => "resta",
    "multiplicacion" => "multiplicacion"
)
//Mezclando arrays y funciones
//Crear la función ordenarArray que acepta como argumento un array de números y devuelva un array ordenado de menor a mayor.
$arrayNumeros = array(1,5,3,9);
$arrayOrdenado = array(1,3,5,9);
function ordenarArray($arrayNumeros) {
    return $arrayOrdenado;
}
echo ordenarArray(1,5,3,9);
//Crear la función obtenerPares que acepta como argumento un array de números y devuelva un array con los elementos pares.

function obtenerPares($arrayNumeros) {
    foreach ($arrayNumeros as $numero) {
      if ($numero % 2 == 0) {
        $arrayPares = $numero;
      }
    }
    return $arrayPares;
  }
  
//Crear la función pintarArray que acepte como argumento un array y devuelva una cadena de texto Array entrada: [0, 1, 2] String salida: '[0, 1, 2]'.
function pintarArray($array)
//Crear la función arrayMapi que acepte como argumento un Array y una función y devuelva un array en el que se haya aplicado la función a cada elemento del array.
function arrayMapi()
//Crear la función eliminarDuplicados que acepte como argumento un array y devuelva un array en el que se hayan eliminado los duplicados.
function eliminarDuplicados($array) {
    return array_values(array_unique($array));
  }
//BUSCADO EN INTERNET ESTE

//Crear la función ordenarArray2 que acepta como argumento un array de números y devuelva un array ordenado de mayor a menor.
$arrayNumeros = array(1,5,3,9);
$arrayOrdenado = array(9,5,3,1);
function ordenarArray($arrayNumeros) {
    return $arrayOrdenado;
}
//Crear la función obtenerImpares que acepta como argumento un array de números y devuelva un array con los elementos impares.
function obtenerImpares($arrayNumeros) {
    foreach ($arrayNumeros as $numero) {
      if ($numero % 2 !== 0) {
        $arrayImpares = $numero;
      }
    }
    return $arrayImpares;
  }
//Crear la función sumarArray que acepte como argumento un array numérico y devuelva la suma de los números en el array Array: [1, 2, 3] resultado: 6.
$arraaay = array(1,2,3);
function sumarArray($arraaay){
    foreach ($arraaay as $numeros) {
        $numeros +=
    }
}
//Crear la función multiplicarArray que acepte como argumento un array numérico y devuelva la multiplicación de los números en el array Array: [2, 3, 4] resultado: 24.
function multiplicarArray($arraaay){
    foreach ($arraaay as $numeros) {
        $numeros +=
    }