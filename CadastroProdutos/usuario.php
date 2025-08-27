<?php

session_start();
header("Content-type:text/html; charset=utf8");

if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["senha"]) && !empty($_POST["senha"])) {
    // If these variables exist then we go ahead
} else {
    // Or we stop here
    header("location: index.html");
}

if (isset($_POST["entrar"])) {
    if ($_POST["senha"] == $_SESSION["senha"] && $_POST["email"] == $_SESSION["email"]) {
        header("location: site.php");
    } else {
        echo "
            <script>
                alert('Falha no login.'); // Encontrei um bug aqui quando se clica no botão gerado pelo script, mas não fui capaz de consertá-lo :(
                window.location.href = 'index.html'
            </script>";
    }

} elseif (isset($_POST["salvar"])) {
    if (isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["endereco"]) && !empty($_POST["endereco"])) {
        $_SESSION["senha"] = $_POST["senha"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["perfil"] = $_POST["perfil"];

        echo "
            <script>
                alert('Usuário cadastrado com sucesso.');
                window.location.href = 'index.html'
            </script>";
    } else { // Usuário não preencheu corretamente
        echo "
            <script>
                alert('Por favor, insira os dados corretamente.');
                window.location.href = 'cadastrousuario.html'
            </script>";
    }
}

?>