<?php

$valor = 12999.99;

function verifica($variable) {
    if(isset($variable) && !empty($variable)) {
        return;
    } else {
        header("location: vendas.html");
    }
}

$parcelasValor = 0;
$parcelas = (int)$_POST["select"];

verifica($parcelas);
verifica($valor);

if ($parcelas == 1) {
    $valor2 = $valor - $valor * 0.1;
} elseif ($parcelas == 11 || $parcelas == 12) {
    $valor2 = $valor * (pow(1 + 0.0229, $parcelas));
} else {
    $valor2 = $valor;
}

$parcelasValor = $valor2/$parcelas;
$valor2 = number_format($valor2, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        table {
            margin: 0 auto;
        }

        div {
            border-radius: 10px;
            width: 40%;
            margin: 50px auto;
            background: grey;
            padding: 0;
        }

        h1 {
            color: lightgrey;
            font-family: Verdana;
            font-size: 20px;
        }

        h2 {
            font-family: Verdana;
            color: lightcoral;
        }

        p {
            font-family: "Lucida Console";
        }

        button, select {
            border-radius: 5px;
            height: 30px;
            min-width: 50%;
            max-width: 80%;
            background: lightgrey;
        }

        button {
            background: greenyellow;
        }

        span {
            color: red;
        }

        .y2 {
            background: lightcoral;
        }

        .y1 {
            background: lightgrey;
        }

        .y0 {
            background: white;
        }

        .bold {
            font-weight: bold;
        }

        .prc {
            background-color: lightgrey;
            border-radius: 5px;
            padding-right: 5px;
            padding-left: 5px;
        }

        .vlr {
            background-color: lightgrey;
            border-radius: 5px;
            padding-left: 50px;
            padding-right: 50px;
        }

    </style>
</head>


<body>
    <div>
        <h1>Você comprou um fusca no valor de <?php echo"{$valor2}" ?> em <?php echo"{$parcelas}"?> parcelas! Confira o valor de cada parcela.<h1></h1>
        <br>
        <table>
            <?php

            for ($i = 1; $i < 13; $i++) {

            if ($i == 1) {
                $valor2 = $valor - $valor * 0.1;
            } elseif ($i == 11 || $i == 12) {
                $valor2 = $valor * (pow(1 + 0.0229, $i));
            } else {
                $valor2 = $valor;
            }

            $parcela = number_format($valor2 / $i, 2);
            $valor2 = number_format($valor2, 2);

            $statement1 = "{$i}x";
            $statement2 = "Parcelas: R$ {$parcela}";
            $statement3 = "Total: R$ {$valor2}";

            $gap1 = str_repeat("⠀", 4 - strlen($statement1));
            $gap2 = str_repeat("⠀", 23 - strlen($statement2));
            $class = $i%2;

            if ($i == $parcelas) {
                $class = 2;
            }

            ?>

            <p value="<?php echo"{$i}" ?>" class="<?php echo"y{$class}" ?>"> <?php echo"{$statement1} {$gap1} {$statement2} {$gap2} {$statement3}" ?>
                <?php
                }
                ?>
        </table>
        <br>
    </div>
</body>
</html>


