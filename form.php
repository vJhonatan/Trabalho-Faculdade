<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
    <title>Formulário de Cadastro | UniCesumar</title>
    <link rel="stylesheet" href="style.css">
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
    <div>
        <h1>FORMULÁRIO DE CADASTRO</h1>
    </div>

    <form action="cad.php" method="$_GET">

        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="" placeholder="Insira seu nome" required>

                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="" placeholder="Insira seu sobrenome" required>

                <label for="nomemae">Nome da Mãe</label>
                <input type="text" name="nomemae" id="" placeholder="Insira o nome de sua mãe">
            </div>
        </fieldset>

        <fieldset class="grupo">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" name="email" id="" placeholder="Insira seu email">

                <label for="senha">Senha</label>
                <input type="password" name="senha" id="" placeholder="Crie uma senha">
            </div>
        </fieldset>

        <fieldset class="grupo">
            <div class="campo">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="" placeholder="Insira seu número">

                <label for="CPF">CPF</label>
                <input type="text" name="CPF" id="" placeholder="Insira seu CPF"> 

                <label for="RG">RG</label>
                <input type="text" name="RG" id="" placeholder="Insira seu RG">
            </div>
        </fieldset>

        <fieldset class="grupo">
            <div class="campo">
                <label for="data">Data de Nascimento</label>
                <input type="date" name="data" id="">

                <label for="idade">Idade</label>
                <input type="number" name="idade" id="" placeholder="Ex: 18"> 
            </div>
        </fieldset>

        <div class="campo">
            <label>Selecione seu Gênero:</label> <br>

            <label>
                <input type="radio" name="genero" value="Masculino"> Masculino
            </label>
            
            <label>
                <input type="radio" name="genero" value="Feminino"> Feminino
            </label>

            <label>
                <input type="radio" name="genero" value="Prefiro não informar"> Prefiro não informar
            </label>
        </div>

        <div class="campo">
            <input type="submit" name="botao" value="CADASTRAR">
        </div>


    </form>
</main>
</body>
</html>