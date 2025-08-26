<?php

    function verifica($variable) {
        if(isset($variable) && !empty($variable)) {
            return;
        } else {
            header("location: index.html");
        }
    }

    $numero = $_POST["numero"];
    $conta = $_POST["conta"];
    $banco = "";

    switch ($_POST["select"]) {
        case "1":
            $banco = "Banco do Brasil";
            break;
        case "2":
            $banco = "Bradesco";
            break;
        case "3":
            $banco = "Caixa";
            break;
        case "4":
            $banco = "Itaú";
            break;
        case "5":
            $banco = "Santander";
            break;
    }

    verifica($banco);
    verifica($conta);
    verifica($numero);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Caixa 2C1</title>

    <style>
        * {
            margin: 0 auto;
            padding: 0;
            text-align: center;
            font-family: Verdana;
            font-size: 11px;
        }

        h1 {
            font-size: 20px;
        }

        table, th, td{
            text-align: center;
        }

        table {
            border: 2px solid black;
            background: black;
        }

        img {
            width: 90px;
            height: 45px;
        }

        th, td {
            background: black;
            padding: 0px;
        }
        .grey {
            background: black;
            border: 2px solid black;
            color: white;
        }
        .darkgrey {
            background: rgb(200, 200, 200);
        }
        .green {
            background: rgb(255, 210, 210);
        }
        .red {
            background: rgb(210, 255, 210);
        }
    </style>
</head>
<body>

    <br>
    <h1>Sacando <?php echo$numero; ?> reais para <?php echo$conta; ?> no Banco "<?php echo$banco; ?>"</h1>
    <br>
            <?php
                $maior = -1;

                $notas100 = floor($numero/100);
                $resto = $numero%100;
                $maior = $notas100 > $maior ? $notas100 : $maior;

                $notas50 = floor($resto/50);
                $resto = $resto%50;
                $maior = $notas50 > $maior ? $notas50 : $maior;

                $notas20 = floor($resto/20);
                $resto = $resto%20;
                $maior = $notas20 > $maior ? $notas20 : $maior;

                $notas10 = floor($resto/10);
                $resto = $resto%10;
                $maior = $notas10 > $maior ? $notas10 : $maior;

                $notas5 = floor($resto/5);
                $resto = $resto%5;
                $maior = $notas5 > $maior ? $notas5 : $maior;

                $notas2 = floor($resto/2);
                $resto = $resto%2;
                $maior = $notas2 > $maior ? $notas2 : $maior;

                ?>
                    <table>
                        <thead>
                        <tr>
                            <th colspan="6" class="grey">Notas a serem distribuídas</th>
                        </tr>
                        <tr>
                            <?php
                                if ($notas2 > 0) {
                            ?>
                            <th><img src="Imagens/nota2.png"></th>
                            <?php } else { $notas2 = -999; } ?>
                            <?php
                                if ($notas5 > 0) {
                            ?>
                            <th><img src="Imagens/nota5.png"></th>
                                <?php } else { $notas5 = -999; } ?>

                            <?php
                                if ($notas10 > 0) {
                            ?>
                            <th><img src="Imagens/nota10.png"></th>
                                <?php } else { $notas10 = -999; } ?>

                            <?php
                                if ($notas20 > 0) {
                            ?>
                            <th><img src="Imagens/nota20.png"></th>
                                <?php } else { $notas20 = -999; } ?>

                            <?php
                                if ($notas50 > 0) {
                            ?>
                            <th><img src="Imagens/nota50.png"></th>
                                <?php } else { $notas50 = -999; } ?>

                            <?php
                                if ($notas100 > 0) {
                            ?>
                            <th><img src="Imagens/nota100.png"></th>
                                <?php } else { $notas100 = -999; } ?>
                        </tr>
                        <tr>
                            <th colspan="6" class="grey">Notas recebidas...</th>
                        </tr>
                        </thead>
                        <tr>
                <?php

                for($maior; $maior > 0; $maior--) {
                    if ($notas2 > 0) {
                        $notas2--;
                        ?>
                        <tr><th><img src="Imagens/nota2.png"></th>
                    <?php } elseif ($notas2 != -999) { ?>
                        <tr><th></th>
                    <?php } else { ?>
                        <tr>
                        <?php
                    }

                    if ($notas5 > 0) {
                        $notas5--;
                        ?>
                        <th><img src="Imagens/nota5.png"></th>
                    <?php } elseif ($notas5 != -999) { ?>
                        <th></th>
                    <?php }

                    if ($notas10 > 0) {
                        $notas10--;
                        ?>
                        <th><img src="Imagens/nota10.png"></th>
                    <?php } elseif ($notas10 != -999) { ?>
                        <th></th>
                    <?php }

                    if ($notas20 > 0) {
                        $notas20--;
                        ?>
                        <th><img src="Imagens/nota20.png"></th>
                    <?php } elseif ($notas20 != -999) { ?>
                        <th></th>
                    <?php }

                    if ($notas50 > 0) {
                        $notas50--;
                        ?>
                        <th><img src="Imagens/nota50.png"></th>
                    <?php } elseif ($notas50 != -999) { ?>
                        <th></th>
                    <?php }

                    if ($notas100 > 0) {
                        $notas100--;
                        ?>
                        <th><img src="Imagens/nota100.png"></th></tr>
                    <?php } elseif ($notas100 != -999) { ?>
                        <th></th></tr>
                    <?php } else { ?>
                        </tr>
                    <?php
                    }
                }?>
        </tbody>
    </table>
</body>

</html>