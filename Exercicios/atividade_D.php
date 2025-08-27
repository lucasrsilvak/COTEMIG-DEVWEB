<?php
header("Content-type:text/html; charset=utf-8");

// Entrada - declaração de variáveis

$materia_1 = "Artes";
$materia_2 = "Biologia";
$materia_3 = "Física";
$materia_4 = "Matemática";
$materia_5 = "Português";
$materia_6 = "Química";

$professor_1 = "Paulo";
$professor_2 = "Felipe";
$professor_3 = "Marcos";
$professor_4 = "Maria";
$professor_5 = "Ione";
$professor_6 = "Luciene";


// Processamento



// Saída - Imprime para o usuário

echo"<h1>Matérias e seus respectivos professores</h1>";

echo"<hr>";
echo"<p><b>Matéria:</b>  {$materia_1} - <b>Professor:</b>  {$professor_1} </p>";
echo"<hr>";
echo"<p><b>Matéria:</b>  {$materia_2} - <b>Professor:</b>  {$professor_2} </p>";
echo"<hr>";
echo"<p><b>Matéria:</b>  {$materia_3} - <b>Professor:</b>  {$professor_3} </p>";
echo"<hr>";
echo"<p><b>Matéria:</b>  {$materia_4} - <b>Professor:</b>  {$professor_4} </p>";
echo"<hr>";
echo"<p><b>Matéria:</b>  {$materia_5} - <b>Professor:</b>  {$professor_5} </p>";
echo"<hr>";
echo"<p><b>Matéria:</b>  {$materia_6} - <b>Professor:</b> {$professor_6} </p>";
echo"<hr>";
?>