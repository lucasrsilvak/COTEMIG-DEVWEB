<?php
header("Content-type:text/html; charset=utf8;");

require_once "Classes/Alunos.php";

$alunos = new Alunos();

if (isset($_POST["salvar"]))
{
    $alunos->inserir();
    header("location: index_alunos.php");
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


        <form class="container" action="cadAlunos.php" method="post">
            <div class="row">
                <div class="form-group col-lg-7">
                    <label for="nome">Nome</label>
                    <input class="form-control" name="nome" required>
                </div>
                <div class="form-group col-lg-5">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" required>
                </div>
                <div class="form-group col-lg-7">
                    <label for="email">E-mail</label>
                    <input class="form-control" name="email" required>
                </div>
                <div class="form-group col-lg-5">
                    <label for="telefone">Telefone</label>
                    <input class="form-control" name="telefone" required>
                </div>
                <div class="form-group col-lg-7">
                    <label for="endereco">Endereço</label>
                    <input class="form-control" name="endereco" required>
                </div>
                <div class="form-group col-lg-5">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" class="form-control" required>
                        <option value="">Selecione um sexo</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="O">Outro</option>
                    </select>
                </div>
                <button type="submit" name="salvar" class="btn btn-success">Salvar</button>
                <a href="index_alunos.php" class="btn btn-danger">Voltar</a>
           </div>
       </form>

   </body>
</html>