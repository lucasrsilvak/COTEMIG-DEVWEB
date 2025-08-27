<?php
    session_start();
    $perfil = "";
    $produto = "";
    $nome = $_SESSION["name"];
    switch ($_SESSION["perfil"]) {
        case "adm":
            $perfil = "Administrador";
            break;
        case "pro":
            $perfil = "Professor";
            break;
        default:
            $perfil = "Aluno";
            break;
    }

    if (isset($_POST["produto"]) && !empty($_POST["produto"]) && isset($_POST["price"]) && !empty($_POST["price"]) && isset($_POST["qntd"]) && !empty($_POST["qntd"])) {
        $_SESSION["produto"] = $_POST["produto"];
        $_SESSION["price"] = $_POST["price"];
        $_SESSION["qntd"] = $_POST["qntd"];
        $produto = sprintf("Produto: %s <br> Preço: %d <br> Quantidade: %d", $_SESSION["produto"], $_SESSION["price"], $_SESSION["qntd"]);

        echo"<script>
                alert('Produto registrado com sucesso!')
            </script>";
    } elseif (isset($_SESSION["produto"])) {
        $produto = sprintf("Produto: %s <br> Preço: %d <br> Quantidade: %d", $_SESSION["produto"], $_SESSION["price"], $_SESSION["qntd"]);
    } else {
        $produto = "Nenhum!";
    }

?>

<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <title>Meu Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <header>
        	Boas vindas à <?php echo"{$nome}" ?>, <?php echo"{$perfil}" ?>!
        </header>
        <div id="sitecontainer">
            <br>
            <label>Menu</label>
            <br><br>
            <div id="linkedbutton">
                <label><a href="registro.html">Registrar um produto</a></label>
            </div>
            <br><br>
            <label class="link">Faça o <a href="logout.php">logout</a></label>
        </div>
        <div id="lastproduct">
            <br>
            <label>Último produto registrado:</label>
            <br><br><br>
            <label><?php echo"{$produto}"?></label>
        </div>
    </body>
</html>