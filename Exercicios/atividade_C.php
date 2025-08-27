<?php
header("Content-type:text/html; charset=utf-8");

// Entrada - declaração de variáveis


$apple = "Maçã";
$appleprice = 0.99;
$appleimage = "<img src='.idea/images/maca.jpg' height='40' width='40' >";

$banana = "Banana";
$bananaprice = 1.99;
$bananaimage = "<img src='.idea/images/banana.jpg' height='40' width='40'>";

$grape = "Uva";
$grapeprice = 2.99;
$grapeimage = "<img src='.idea/images/uva.jpg' height='40' width='40'>";

$greenapple = "Maçã-Verde";
$greenappleprice = 3.99;
$greenappleimage = "<img src='.idea/images/macaverde.jpg' height='40' width='40'>";

$lemon = "Limão";
$lemonprice = 4.99;
$lemonimage = "<img src='.idea/images/limao.jpg' height='40' width='40'>";

$melon = "Melão";
$melonprice = 5.99;
$melonimage = "<img src='.idea/images/melao.jpg' height='40' width='40'>";

$orange = "Laranja";
$orangeprice = 6.99;
$orangeimage = "<img src='.idea/images/laranja.jpg' height='40' width='40'>";

$pineapple = "Abacaxi";
$pineappleprice = 7.99;
$pineappleimage = "<img src='.idea/images/abacaxi.png' height='40' width='40'>";

$tomato = "Tomate";
$tomatoprice = 8.99;
$tomatoimage = "<img src='.idea/images/tomate.jpg' height='40' width='40'>";

$watermelon = "Melancia";
$watermelonprice = 9.99;
$watermelonimage = "<img src='.idea/images/melancia.jpg' height='40' width='40'>";



// Processamento


// Saída - Imprime para o usuário

echo"<h1>Mercado de frutas do Lucão comunista</h1>";
echo"<hr>";
echo"<p><b>Nome:</b> {$apple} <br><b>Preço:</b> {$appleprice} <br><b>Imagem:</b><br>{$appleimage}</p>";
echo"<hr>";
echo"<p><b>Nome:</b> {$banana} <br><b>Preço:</b> {$bananaprice} <br><b>Imagem:</b><br>{$bananaimage}</p>";
echo"<hr>";
echo"<p><b>Nome:</b> {$grape} <br><b>Preço:</b> {$grapeprice} <br><b>Imagem:</b><br>{$grapeimage}</p>";
echo"<hr>";
echo"<p><b>Nome:</b> {$greenapple} <br><b>Preço:</b> {$greenappleprice} <br><b>Imagem:</b><br>{$greenappleimage}</p>";
echo"<hr>";
echo"<p><b>Nome:</b> {$lemon} <br><b>Preço:</b> {$lemonprice} <br><b>Imagem:</b><br>{$lemonimage}</p>";
echo"<hr>";
echo"<p><b>Nome:</b> {$melon} <br><b>Preço:</b> {$melonprice} <br><b>Imagem:</b><br>{$melonimage}</p>";
echo"<hr>";
echo"<p><b>Nome:</b> {$orange} <br><b>Preço:</b> {$orangeprice} <br><b>Imagem:</b><br>{$orangeimage}</p>";
echo"<hr>";
echo"<p><b>Nome:</b> {$pineapple} <br><b>Preço:</b> {$pineappleprice} <br><b>Imagem:</b><br>{$pineappleimage}</p>";
echo"<hr>";
echo"<p><b>Nome:</b> {$tomato} <br><b>Preço:</b> {$tomatoprice} <br><b>Imagem:</b><br>{$tomatoimage}</p>";
echo"<hr>";
echo"<p><b>Nome:</b> {$watermelon} <br><b>Preço:</b> {$watermelonprice} <br><b>Imagem:</b><br>{$watermelonimage}</p>";
echo"<hr>";
?>