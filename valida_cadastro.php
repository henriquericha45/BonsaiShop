<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["numero"]) || empty($_POST["senha"]) || empty($_POST["confirmaSenha"])) {
        header('Location: cadastro.php?erro=1');
    } else if(!empty($_POST["senha"]) && !empty($_POST["confirmaSenha"]) && $_POST["senha"] != $_POST["confirmaSenha"]) {
        header('Location: cadastro.php?erro=2');
    } else {
        header('Location: home.php');
    }
    /*
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

    if ($password != $confirmaPassword) {
        $confirmaSenhaErr = "* Senhas não conferem";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    */
}

?>