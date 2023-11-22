<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro | UniCesumar</title>
</head>
<body>
    <header class="cabeçalho">

    <a href="#"> <img src="./img/logo.png" alt="UniCesumar"> </a>
        
        <nav class="cabeçalho-menu">
            <a class="cabeçalho-link" href="./index.html">INICIO</a>
            <a class="cabeçalho-link" href="vetores.php">VETORES</a>
            <a class="cabeçalho-link" href="./index.html#first">LINGUAGENS</a>
        </nav>

        <a href="./form.html">
            <input class="cabeçalho-button" type="button" value="CADASTRE-SE">
        </a>
        
    </header>
    <main>
        <h1>CADASTRO</h1>
    </main>
</body>

<div class="text">

<?php 

    $name = $_GET ["nome"];
    $sobrenome = $_GET ["sobrenome"];
    echo "Olá $name $sobrenome! <br> Cadastro efetuado com sucesso <br> seja bem vindo!";
    
?>
</div>
</html>