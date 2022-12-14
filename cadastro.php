<?php
    include "header.php";
?>

<style>
    <?php include "style.css"; ?>
</style>
<div class="menu-cadastro">
    <form class="form-cadastro" method="post">
        <h1 class="titulo-cadastro"> Cadastro </h1>
        <hr>
        <label for="nome"> Nome </label>
        <input class="campo" type="text" name="nome" placeholder="Nome">
        <label for="email"> Email </label>
        <input class="campo" type="text" name="email" placeholder="Email">
        <label for="numero"> Telefone </label>
        <input class="campo" type="text" name="numero" placeholder="Número">
        <label for="senha"> Senha </label>
        <input class="campo" type="text" name="senha" placeholder="Senha">
        <label for="confirmar-senha"> Confirmar Senha </label>
        <input class="campo" type="text" name="confirmar-senha" placeholder="Confirmar Senha">
        <input class="botao-cadastro" type="submit" value="Cadastrar-se">
    </form>
</div>