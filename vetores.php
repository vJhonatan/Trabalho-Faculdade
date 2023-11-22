<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
    <title>Vetores | UniCesumar</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header class="cabeçalho">
        
            <a href="#"> <img src="./img/logo.png" alt="UniCesumar"> </a>

        <nav class="cabeçalho-menu">
            <a class="cabeçalho-link" href="index.html">INICIO</a>
            <a class="cabeçalho-link" href="vetores.php">VETORES</a>
            <a class="cabeçalho-link" href="./index.html#first">LINGUAGENS</a>
        </nav>

        <a href="./form.php">
            <input class="cabeçalho-button" type="button" value="CADASTRE-SE">
        </a>
    </header>
    <main>
        <h1>VETORES</h1>
        <div class="vetores">
        <p>Os vetores dentro do PHP são conhecidos como arrays. <br><br>

            Um array no PHP é um mapa ordenado. Um mapa é um tipo que relaciona valores a chaves. Este tipo é otimizado para vários usos diferentes: ele pode ser tratado como um array, uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila incluindo outros. Assim como existe a possibilidade dos valores do array serem outros arrays, árvores e arrays multidimensionais. <br><br>
            
            Em PHP eles podem ser criados de várias maneiras. A forma mais comum é usando a função “array ( )” ou a sintaxe de colchetes“[ ]”. <br><br>
            
            // Usando a função array() $notas = array(1, 2, 3); <br><br>
            
            // Usando a sintaxe de colchetes $notas = [4, 5, 6]; <br> <br><br>
            
            Índices: <br><br>
            
            Os elementos em um vetor são acessados por meio de índices, que começam do zero. O primeiro elemento tem índice 0, o segundo tem índice 1 e assim por diante. <br><br>
            
            O índice do primeiro valor é zero<br><br><br>
            
            Indice// 0            1             2                3 <br><br>
            
            Valor//  9           21            7              15 <br><br><br>
            
            Os vetores em PHP podem conter uma mistura de tipos de dados, como inteiros, strings, booleanos, outros vetores <br><br>
            
            Funções de Vetores: <br><br>
            
            PHP fornece uma variedade de funções para trabalhar com vetores. Algumas das funções mais comuns são count(), array_push(), array_pop(), array_shift(), array_unshift(), array_merge(), etc. <br><br>
            
            Associative Arrays: <br><br><br>
            
            Além dos vetores indexados numericamente, o PHP suporta arrays associativos, onde os elementos são associados a chaves em vez de índices numéricos. <br><br>
            
            Esses são alguns conceitos fundamentais sobre como os vetores funcionam em PHP. Eles são uma parte essencial da linguagem e são amplamente utilizados para armazenar e manipular dados de forma eficiente. <br><br><br>

        </p>

        <hr>
        </div>

        <div class="exercicio">
            <h1>
                UTILIZANDO SEU CONHECIMENTO EM PHP, CRIE UM <br> PROGRAMA PARA CALCULAR A MÉDIA DAS NOTAS <br> DE UM ALUNO. NELE FAÇA O USO DE VETORES:
            </h1>

            <form class="vetor" action="./vetores.php#resultado" method="POST">
                <p>
                     Nota 1: <input class="input-vetor" type="number" name="n1" required>
                </p>
                <p>
                 Nota 2: <input class="input-vetor" type="number" name="n2" required>
                </p>
             
                <input class="input-vetor" type="submit" name="calcular" id="resultado" value="Calcular">
        </div>
        <div class="text">

        <?php 

        if (isset($_POST['calcular'])){
            $notas = array($_POST['n1'], $_POST['n2']);
            $num_position = count($notas);
            
            $soma = 0;
            for ($i = 0; $i <= $num_position; $i++){
                $soma += @$notas[$i];
            } 
            $media = $soma/$num_position;
            
            echo "Sua média é $media";
            if ($media < 6){
                echo " - Reprovado";
            } 
            else {
                echo " - Aprovado";
            }
        }
    ?>
    
    </div>
    </main>
</body>
</html>
