<?php
$GLOBALS['resultado'] = 0;
$valor_1 = 10;
$valor_2 = 20;
$operador = '+';

calcular($valor_1, $valor_2, $operador);

function calcular($valor_1, $valor_2, $operador){

    if ($operador == '+')
       $GLOBALS['resultado'] = somar($valor_1, $valor_2);

    if ($operador == '-')
        $GLOBALS['resultado'] = subtrair($valor_1, $valor_2);

    if ($operador == '*')
        $GLOBALS['resultado'] = multiplicar($valor_1, $valor_2);

    if ($operador == '/')
        $GLOBALS['resultado'] = dividir($valor_1, $valor_2);

    }

function somar($valor_1, $valor_2){

    return $valor_1 + $valor_2;

}

function subtrair($valor_1, $valor_2){

    return $valor_1 - $valor_2;

}

function multiplicar($valor_1, $valor_2){

    return $valor_1 * $valor_2;

}

function dividir($valor_1, $valor_2){

    return $valor_1 / $valor_2;

}

echo $valor_1 . $operador . $valor_2 . '=' . $GLOBALS['resultado'];

?>