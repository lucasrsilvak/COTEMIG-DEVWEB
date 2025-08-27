<?php

session_start();

$pagina = 11;
$notas = [];
$exists = false;

if (isset($_SESSION['Answers'])) {
    $notas = $_SESSION['Answers'];
}
else
{
    $notas = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
    $_SESSION["Answers"] = $notas;
    $_SESSION["Exists"] = true;
}

if (isset($_POST["q"]) && !empty($_POST["q"]))
{
    $notas[$pagina - 1] = $_POST["q"];
}

if (isset($_POST["enviar"]) & !empty($_POST["enviar"])) {
    if ($_POST["enviar"] == "false") {
        $_SESSION["Answers"] = $notas;
        header ("location: resultado.php");
    }
}

function equal ($id, $pagina, $notas) {
    if ($id == $notas[$pagina - 1]) {
        return true;
    } else {
        return false;
    }
}

$_SESSION["Answers"] = $notas;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Questão 11</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="header"><a href="pagina10.php"><<<</a><label class="title">Questão <?php echo "$pagina"?></label><a href="pagina12.php">>>></a></div>
    <form name="answer" action="pagina11.php" method="post">
        <div class="enunciated">Determine o último valor assumido pela variável $total no final programa:
            <div class="accomplishment">
                <?php
                echo htmlspecialchars("\$total = 5;");
                ?> <br> <?php
                echo htmlspecialchars("\$cont = 1;");
                ?> <br><br> <?php
                echo htmlspecialchars("do {");
                ?> <br> <?php
                echo htmlspecialchars("ㅤ\$total = \$total + \$cont;");
                ?> <br> <?php
                echo htmlspecialchars("ㅤ\$cont++;");
                ?> <br> <?php
                echo htmlspecialchars("} while (\$cont < 8);");
                ?>
            </div>
        </div>


        <div class="boardAnswers">
            <div class="answer"><input type="radio" id="answer1" value="F1" name="q" <?php if (equal("F1", $pagina, $notas)) { ?> checked <?php } ?> required>   <label for="answer1">a) 20</label></div>
            <div class="answer"><input type="radio" id="answer2" value="F2" name="q" <?php if (equal("F2", $pagina, $notas)) { ?> checked <?php } ?> required>   <label for="answer2">b) 22</label></div>
            <div class="answer"><input type="radio" id="answer3" value="T" name="q" <?php if (equal("T", $pagina, $notas)) { ?> checked <?php } ?> required>   <label for="answer3">c) 18</label></div>
            <div class="answer"><input type="radio" id="answer4" value="F3" name="q" <?php if (equal("F3", $pagina, $notas)) { ?> checked <?php } ?> required>   <label for="answer4">d) 26</label></div>
            <div class="answer"><input type="radio" id="answer5" value="F4" name="q" <?php if (equal("F4", $pagina, $notas)) { ?> checked <?php } ?> required>   <label for="answer5">e) 33</label></div>
        </div>

        <button type="submit" name="enviar" value="true">Enviar</button>
        <button type="submit" name="enviar" value="false">Finalizar</button>
    </form>
</div>
</body>
</html>