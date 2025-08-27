<?php
header("Content-type:text/html; charset=utf-8");

// Entrada - declaração de variáveis

$fname = "Lucas";
$sname = "Ribeiro";

// Processamento

$tname = "$fname $sname";

// Saída - Imprime para o usuário

echo"<h1>Meu nome e sobrenome em PHP</h1>";
echo"<p>Meu nome e sobrenome: {$tname}</p>"

?>