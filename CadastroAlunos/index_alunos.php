<?php
header("Content-type:text/html; charset=utf8;");

require_once "Classes/Alunos.php";

$alunos = new Alunos();
$listaAlunos = $alunos->listarTodos();

if (isset($_GET["m"]))
{
    $alunos->excluir($_GET["m"]);

}
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>

    <body>
        <header>
            <div class="container">
                <img src="https://cdn.discordapp.com/attachments/690672186423509112/763825434130382848/oie_transparent_57.png" width="30"> Sistema Escolar 28
            </div>
        </header>

        <table class="container table smoothBorder">
            <thead>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th></th>
                <th colspan="2"><a href="cadAlunos.php"><button type="submit" class="btn btn-success">Novo</button></a></th>
            </thead>
            <tbody>
                <?php
                    if ($listaAlunos) :
                        foreach ($listaAlunos as $aluno) : ?>
                            <tr>
                                <td><?php echo$aluno->MATRICULA; ?></td>
                                <td><?php echo$aluno->NOME; ?></td>
                                <td><?php echo$aluno->SEXO; ?></td>
                                <td><?php echo$aluno->EMAIL; ?></td>
                                <td><?php echo$aluno->ENDERECO; ?></td>
                                <td><?php echo$aluno->TELEFONE; ?></td>
                                <td></td>
                                <td>
                                    <a href="index_alunos.php?m=<?php echo $aluno->MATRICULA; ?>" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                                <td><a class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                            </tr>
                        <?php endforeach;
                    else : ?>
                        <tr>
                            <td colspan="9">Nenhum aluno encontrado</td>
                        </tr>
                    <?php endif;
                ?>
            </tbody>
        </table>
    </body>
</html>