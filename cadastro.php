<?php
include "header.php";
?>

<style>
    <?php include "style.css";
    ?>
</style>

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nome"])) {
        $nameErr = "* Nome obrigatório";
    } else {
        $name = test_input($_POST["nome"]);
    }
    #--
    if (empty($_POST["email"])) {
        $emailErr = "* Email obrigatório";
    } else {
        $email = test_input($_POST["email"]);
    }
    #--
    if (empty($_POST["numero"])) {
        $numberErr = "* Número obrigatório";
    } else {
        $number = test_input($_POST["numero"]);
    }
    #--
    if (empty($_POST["senha"])) {
        $passwordErr = "* Senha obrigatória";
    } else {
        $password = test_input($_POST["senha"]);
    }
    #--
    if (empty($_POST["confirmaSenha"])) {
        $confirmaSenhaErr = "* Confirmar senha obrigatória";
    } else {
        $confirmaPassword = test_input($_POST["confirmaSenha"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<div class="menu-cadastro">
    <form class="form-cadastro" action="cadastro.php" method="post">
        <h1 class="titulo-cadastro"> Cadastro </h1>
        <hr>
        <label for="nome"> Nome </label><span class="error"> <?php echo $nameErr; ?> </span>
        <input class="campo" type="text" name="nome" placeholder="Nome">
        <label for="email"> Email </label><span class="error"><?php echo $emailErr; ?> </span>
        <input class="campo" type="text" name="email" placeholder="Email">
        <label for="numero"> Telefone </label><span class="error"><?php echo $numberErr ?></span>
        <input class="campo" type="text" name="numero" placeholder="Número">
        <label for="senha"> Senha </label><span class="error"><?php echo $passwordErr; ?></span>
        <input class="campo" type="password" name="senha" placeholder="Senha">
        <label for="confirmaSenha"> Confirmar Senha </label><span class="error"><?php echo $confirmaSenhaErr; ?></span>
        <input class="campo" type="password" name="confirmaSenha" placeholder="Confirmar Senha"`>

        <input class="botao-cadastro" type="submit" value="Cadastrar-se">
    </form>
</div>