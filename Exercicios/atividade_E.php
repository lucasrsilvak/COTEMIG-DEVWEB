<?php
header("Content-type:text/html; charset=utf-8");

// Entrada - declaração de variáveis

$preco = 9.99;

// Processamento

$preco1 = $preco / 10;
$preco2 = $preco - $preco1;
number_format($preco1,2);
number_format($preco2,2);


// Saída - Imprime para o usuário

echo"<h1>Comprar uma melancia com desconto!</h1>";
echo"<hr>";
echo"<p>Este cupom lhe permite comprar uma melancia de preço original: <b>" .number_format($preco,2). " R$</b> com um desconto equivalente a <b>" .number_format($preco1,2). " R$ </b> portanto o valor a pagar é <b>" .number_format($preco2,2). " R$!</b></p>"
?>