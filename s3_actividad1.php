<?php
// Actividad 1: Tres funciones definidas por el usuario para realizar las 3 opciónes.

// Opción 1: resolver ecuación de volumen de un cilindro.
// V=πr2h V=3.1416×(5)2×10
function formula_1($pi_1, $Radio_1, $Altura_1)
{
    return $pi_1 * $Radio_1 ** 2 * $Altura_1;
}
$valor_radio_1 = 5;
$valor_altura_1 = 10;
$valores_1 = formula_1(3.1416, $valor_radio_1, $valor_altura_1);
echo "El volumen de un cilindro es igual a pi(3.1416) por el radio al cuadrado por la altura. <br>" . $valores_1 . "<br>";

// Opción 2: resolver ecuación de área de un círculo.
// A=πr2 A=3.1416×(7)2
function formula_2($pi_2, $radio_2)
{
    return $pi_2 * $radio_2 ** 2;
}
$valor_radio_2 = 7;
$valores_2 = formula_2(3.1416, $valor_radio_2);
echo "El área de un círculo es igual a pi(3.1416) por el radio al cuadrado. <br>" . $valores_2 . "<br>";

// Opción 3: resolver cálculo del área de un triángulo.
// A= 1/2 * base * altura
function formula_3($base_3, $altura_3)
{
    return $base_3 * $altura_3 / 2;
}
$valor_base_3 = 8;
$valor_altura_3 = 5;
$valores_3 = formula_3($valor_base_3, $valor_altura_3);
echo "El área de un triángulo se calcula multiplicando la base por la altura y dividiendo el resultado entre dos. <br>" . $valores_3 . "<br>";
