<?php
header("Content-type:text/html; charset=utf8");

// !!!! WAMPSERVER NAO PRESTA !!!!
//receber os dados do html

$numero = $_POST["numero"];

echo "<br><h3>Imprimindo a nota de {$numero} alunos usando PHP</h3><hr><br>";

?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabuada 2C1</title>
    <!--    css interno-->
    <style>
        * {
            margin: 0 auto;
            text-align: center;
            font-family: Verdana;
            font-size: 11px;
        }
        table, th, td{
            border: 1px solid black;
            border-radius: 5px;
            text-align: center;
        }
        table {
            background: black;
        }

        th, td {
            background: white;
        }
        thead th {
            background: rgb(180, 180, 180);
        }
        .grey {
            background: rgb(220, 220, 220);
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
<!--imprindo variavel php dentro do html-->
<table>
    <thead>
        <tr>
            <th>Aluno</th>
            <th>Matrícula</th>
            <th>Pts de Pj</th>
            <th>Pts de PI</th>
            <th>Pts de PT</th>
            <th>1° Trimestre</th>
            <th>Pts de Pj</th>
            <th>Pts de PI</th>
            <th>Pts de PT</th>
            <th>2° Trimestre</th>
            <th>Pts de Pj</th>
            <th>Pts de PI</th>
            <th>Pts de PT</th>
            <th>3° Trimestre</th>
            <th>Total - Ano</th>
            <th>Média</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <!--    utilizar estrutura de repeticao do PHP dentro do HTML-->
    <?php for($i = 1; $i <= $numero; $i++) {
        $aluno = "Aluno ". $i;
        $matricula = "1200" . rand(1000,9999);
        $notaPj1 = rand(0,12);
        $notaPt1 = rand(0,12);
        $notaPi1 = rand(0,6);
        $total1 = $notaPj1 + $notaPt1 + $notaPi1;
        $notaPj2 = rand(0,14);
        $notaPt2 = rand(0,14);
        $notaPi2 = rand(0,7);
        $total2 = $notaPj2 + $notaPt2 + $notaPi2;
        $notaPj3 = rand(0,14);
        $notaPt3 = rand(0,14);
        $notaPi3 = rand(0,7);
        $total3 = $notaPj3 + $notaPt3 + $notaPi3;
        $total = $total1 + $total2 + $total3;
        $media = $total/3;
        ?>
        <tr>
            <td class="darkgrey"><b><?php echo $aluno ; ?></b></td>
            <td class="darkgrey"><b><?php echo $matricula; ?></b></td>
            <td><?php echo $notaPj1; ?></td>
            <td><?php echo $notaPi1; ?></td>
            <td><?php echo $notaPt1; ?></td>
            <td class="grey"><b><?php echo $total1; ?></td></b>
            <td><?php echo $notaPj2; ?></td>
            <td><?php echo $notaPi2; ?></td>
            <td><?php echo $notaPt2; ?></td>
            <td class="grey"><b><?php echo $total2; ?></td></b>
            <td><?php echo $notaPj3; ?></td>
            <td><?php echo $notaPi3; ?></td>
            <td><?php echo $notaPt3; ?></td>
            <td class="grey"><b><?php echo $total3; ?></td></b>
            <td class="darkgrey"><b><?php echo $total; ?></td></b>
            <td class="grey"><b><?php echo number_format($media, 2); ?></td></b>
            <?php
                if ($total >= 60) {

                ?> <td class="red"><b><i>Aprovado</i></b></td>
                <?php } else { ?>
                    <td class="green"><b><i>Reprovado</i></b></td>
                <?php }
            ?>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
