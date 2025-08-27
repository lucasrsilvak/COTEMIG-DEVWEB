<?php
session_start();

$pagina = 13;
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
    <title>Questão 13</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="header"><a href="pagina12.php"><<<</a><label class="title">Questão <?php echo "$pagina"?></label><a href="pagina14.php">>>></a></div>
    <form name="answer" action="pagina13.php" method="post">
        <div class="enunciated">Quando queremos recuperar valores de formulário HTML no PHP, qual comando correto para recuperar um valor de input com name txtvalor enviados de acordo com a imagem abaixo.
            <div class="accomplishment">
                <?php
                echo htmlspecialchars("<form action=\"logar.php\" method=\"post\">");
                ?>
            </div>
        </div>


        <div class="boardAnswers">
            <div class="answer"><input type="radio" id="answer1" value="F1" name="q" <?php if (equal("F1", $pagina, $notas)) { ?> checked <?php } ?> required>   <label for="answer1">a) $preco = $GET["txtvalor"];</label></div>
            <div class="answer"><input type="radio" id="answer2" value="F2" name="q" <?php if (equal("F2", $pagina, $notas)) { ?> checked <?php } ?> required>   <label for="answer2">b) $preco = $_GET["txtvalor"];</label></div>
            <div class="answer"><input type="radio" id="answer3" value="T" name="q" <?php if (equal("T", $pagina, $notas)) { ?> checked <?php } ?> required>   <label for="answer3">c) $preco = $POST["txtvalor"];</label></div>
            <div class="answer"><input type="radio" id="answer4" value="F3" name="q" <?php if (equal("F3", $pagina, $notas)) { ?> checked <?php } ?> required>   <label for="answer4">d) $preco = $_POST["txtvalor"];</label></div>
            <div class="answer"><input type="radio" id="answer5" value="F4" name="q" <?php if (equal("F4", $pagina, $notas)) { ?> checked <?php } ?> required>   <label for="answer5">e) $preco = ["txtvalor"];</label></div>
        </div>

        <button type="submit" name="enviar" value="true">Enviar</button>
        <button type="submit" name="enviar" value="false">Finalizar</button>
    </form>
</div>
</body>
</html>