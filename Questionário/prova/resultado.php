<?php
session_start();

if (isset($_POST["enviar"]) && $_POST["enviar"] == "true") {
    session_unset();
    ?>
    <script>
        window.location = "/desafio2/index.html";
    </script>
    <?php
}

$naopreenchidas = 0;
$acertos = 0;
$notas = $_SESSION["Answers"];
$concat = "";
$branco[] = [];

for ($i = 0; $i < 14; $i++) {
    if (gettype($notas[$i]) == "integer") {
        $naopreenchidas++;
        $num = $i + 1;
        $concat = $concat . ", " . $num;
    }

    if (isset($notas[$i]) && $notas[$i] == "T") {
        $acertos++;
    }
    else
    {

    }
}

if ($naopreenchidas != 0) {
    ?>
    <script>
        var r = confirm("Você pretende deixas as seguintes questões em branco<?php echo $concat ?>?");
        if (r == true) {
        } else {
            window.location = "pagina1.php";
        }
    </script>
    <?php
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
    <form action="resultado.php" method="post">

        <label class="title">Prova de DevWeb</label>
        <h3><?php echo $_SESSION["Nome"] ?> - <?php echo $_SESSION["Email"] ?></h3>

        <table>
            <?php for ($i = 0; $i < 14; $i++) {
                ?> <tr> <?php
                    if (isset($notas[$i]) && $notas[$i] == "T") {
                        ?><th class="acer"><?php echo $i + 1; ?></th><?php
                    }
                    else
                    {
                        ?><th class="erro"><?php echo $i + 1; ?></th><?php
                    }
                    ?> </tr> <?php
                }
            ?>

        </table>

        <h3>Resultado da avaliação: <?php echo $acertos ?></h3>

        <button type="submit" name="enviar" value="true">Sair</button>
    </form>
</div>
</body>
</html>
