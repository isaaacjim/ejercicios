<?php
/* Un bikram es una combinación de 26 ejercicios de programación 
para perfeccionar la conexión entre el programador interior que llevas dentro y el alma del lenguaje de programación.
Estas 26 pruebas cubren un espectro de dificultad incremental, dotada de tests que cubrirán la correcta 
resolución para ayudarte a encontrar posibles errores en tu código. */

//Variables y Constantes
//Crea una variable de nomre "variable sin valor" declarada sin valor.

$variable_sin_valor = "";

//Crea dos variables con nombres booleano1 y booleano2 con valores booleanos.
$boleano1 = true;
$boleano2 = false;
//Crea una constante con el número PI.
define("PI", 3,1416);
//Crea una variable llamada tau con el valor de PI multiplicado por dos.
$tau = PI*2;
//Crea una constante de nombre "mi nombre" con tu nombre.
$mi_nombre = "Isaac";
//Crea una constante de nombre "mi num fav" con valor numérico.
$mi_num_fav = 6;
//Booleanos
//Crear una variable cuya valor sea la comparación entre booleano1 and booleano2.
$boleano1 = true;
$boleano2 = false;
$comparacion = $boleano1 && $boleano2;
//Crea una variable cuyo valor sea la comparación booleana de no boleano1.
$boleano1 = true;
$boleano2 = false;
$comparacion = $boleano1 != $boleano2;
//Crea variable cuyo valor sea la compración booleana de (booleano1 or booleano2) and (booleano1 or (no booleano1 and no booleano2)).
$boleano1 = true;
$boleano2 = false;
$comparacion = $boleano1 or $boleano2 && $boleano1 || != $boleano1 && != $boleano2;
//Crear variable cuyo valor sea la comparación booleano1 or booleano2.
$boleano1 = true;
$boleano2 = false;
$comparacion = $boleano1 or $boleano2
//Crear una variable cuyo valor sea la compración booleano (booleano1 and (tau/2 sea igual a PO) or (variableNumerica mayor o igual a miNumFav))
$PO = $boleano1 and ($tau/2) || $variable_numerica >= $mi_num_fav
//Crea una variable cuya valor sea la comparación booleana 6 no es estrictamente igual que 9.
$valor = (6 = 9)
//Crear una variable cuyo valor sea la comparación booleana variableNumerica es positivo o menor que (miNumFav tau)*.
$comparacion = 6 !== 9;
//Operadores
//Crea una variable con valor 2, después súmale 5.
$variable1 = 2;

$variable2 = $variable1 + 5;
//Crea una variable cuyo valor sea la resta de miNumFav y una variable de valor numérico.
$valor_numerico = 5;
$variable100 = $mi_num_fav - $valor_numerico;
//Crea una variable cuyo valor sea la suma de miNumFav y una variable de valor numérico.
$variable101= $mi_num_fav + $valor_numerico;
//Crea una variable cuyo valor sea la multiplicación de miNumFav y una variable de valor numérico.
$variable102= $mi_num_fav * $valor_numerico;
//Crea una variable cuyo valor sea la división de miNumFav y una variable de valor mumérico igual a 3.
$variable103= $mi_num_fav / $valor_numerico;
//Crea una variable cuyo valor sea el resto de la división de 143 dividido entre 140.
$resto = 143 % 140;
//Crea una variable que cuyo valor sea el resto de la división de 25 entre 5.
$resto = 25 % 5;
//Bucles
//Crear variable contarHasta10_2 con valor 0 e incrementar su valor con un bucle for hasta que se verifique que contarHasta10_2 === 10.
$contar_hasta_10_2 = 0;

for ($i=0 $i = 10; $i++) { 
    $contar_hasta_10_2++
}
echo $contar_hasta_10_2;
//Crear las variables postI y postJ con valor 0 a continuación crea un bucle que itere 11 veces. En cada iteración se deberá sumar al valor de postI el valor de postJ++.
$postI = 0;
$postJ = 0;

for ($i=0; $i < 11; $i++) { 
    $postI += $postJ++;
}
    echo $postI;
//Crear la variable sumaPares con valor 0 a continuación crea un bucle que itere 10 veces (i < 10) si la iteración es par se deberá sumar a sumaPares el número de la iteración actual (i).
$sumaPares = 0;
for ($i=0; $i < 10; $i++) { 
    if ($i % 2 == 0) {
        $sumaPares += $i;
    }
}
echo $sumaPares;
//Crear variable contarHasta10 con valor 0 e incrementar su valor con un bucle while hasta que se verifique que contarHasta10 === 10.
$contarHasta10 = 0;
while ($a <= 10) {
  $contarHasta10++;
}
echo $contarHasta10;
//Crear las variables preI y preJ con valor 0 a continuación cree un bucle que itere 11 veces. En cada iteración se deberá sumar al valor de preI el valor de ++preJ.
$preI= 0;
$preJ = 0;
for ($i=0; $i < 11; $i++) { 
    $preI + $preJ++
}
//Crear la variable sumaImpares con valor 0 a continuación crea un bucle que itere 10 veces (i < 10) si la iteración es impar se deberá sumar a sumaImpares el número de la iteración actual (i). */
$sumaImpares = 0;
for ($i=0; $i < 10 ; $i++) { 
    if(($i % 2)= 1) {
    $sumaImpares + 1;    
    }
    echo $sumaImpares;
}