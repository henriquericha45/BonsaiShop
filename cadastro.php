<?php
include "header.php";
?>

<style>
    <?php include "style.css";
    ?>
</style>

<div class="menu-cadastro">
    <form class="form-cadastro" action="valida_cadastro.php" method="post">
        <h1 class="titulo-cadastro"> Cadastro </h1>
        <hr>
        <?php
        if ($_GET['erro'] == 1) {
            echo "<span class='error'> * Preencha todos os campos! </span>";
        } else if ($_GET['erro'] == 2) {
            echo "<span class='error'> * Senhas não conferem! </span>";
        }
        ?>
        <label for="nome"> Nome </label>
        <input class="campo" type="text" name="nome" placeholder="Nome">
        <label for="email"> Email </label>
        <input class="campo" type="text" name="email" placeholder="Email">
        <label for="numero"> Telefone </label>
        <input class="campo" type="text" name="numero" placeholder="Número">
        <label for="senha"> Senha </label>
        <input class="campo" type="password" name="senha" placeholder="Senha">
        <label for="confirmaSenha"> Confirmar Senha </label>
        <input class="campo" type="password" name="confirmaSenha" placeholder="Confirmar Senha" `>

        <input class="botao-cadastro" type="submit" value="Cadastrar-se">
    </form>
</div>