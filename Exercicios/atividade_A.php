<?php
header("Content-type:text/html; charset=utf-8");

// Entrada - declaração de variáveis

$number1 = 15;
$number2 = 3;

// Processamento

$soma = $number1 + $number2;
$mult = $number1 * $number2;
$divi = $number1 / $number2;
$subt = $number1 - $number2;

// Saída - Imprime para o usuário

echo"<h1>Calculadora simples</h1>";
echo"<hr>";
echo"<p>Soma dos números <b>{$number1} + {$number2} = {$soma}</b></p>";
echo"<hr>";
echo"<p>Multiplicação dos números <b>{$number1} x {$number2} = {$mult}</b></p>";
echo"<hr>";
echo"<p>Divisão dos números <b>{$number1} / {$number2} = {$divi}</b></p>";
echo"<hr>";
echo"<p>Subtração dos números <b>{$number1} - {$number2} = {$subt}</b></p>";

?>