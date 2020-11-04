<?php
    include_once('conexao.php');
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos Full Stack Eletro</title>
    <link rel="stylesheet" href="estilo.css"> <!-- link para acesso arquivo CSS externo -->
   
</head>
<body>

    <!-- Início do Menu -->
    <?php
        include_once('menu.html');
    ?>
    <!-- Fim do Menu-->

    <header>
        <h2>Produtos</h2>
    </header>
    
    <hr class="linhaprincipal">

        <section class= "categoria">
            <h3> Categorias: </h3> 
            <br>
            <ul>
                 
                <li onclick="exibir_todos()">Todos (12)</li>
                <br>
                <li onclick="exibir_categoria('geladeira')">Geladeira (3)</li>
                <br>
                <li onclick="exibir_categoria('fogao')">Fogão (2)</li>
                <br>
                <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                <br>
                <li onclick="exibir_categoria('maquinadelavar')">Máquina de Lavar Roupa (2)</li>
                <br>
                <li onclick="exibir_categoria('lavaloucas')">Lava-louça (2)</li>

            </ul>
        </section>
             
                <br> <br> <br>

        <div class="produtos"> 

            <?php
                $sql = "select * from produtos";
                $result = $conn -> query($sql); 
            
                if($result->num_rows > 0){
                    while($rows = $result -> fetch_assoc()){
                        //echo $rows["categoria"];

            ?>

                <div class="box_produto" id="<?php echo $rows["categoria"]; ?>" style="display:block">
                    <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="darZoom(this)">
                    <br>
                    <p id="descricao"> <?php echo $rows["descricao"]; ?> </p> 
                    <hr id="divisao">
                    <p id="descricao"> <strike> R$ <?php echo $rows["preco"]; ?> </strike></p>
                    <p id="preco"> R$ <?php echo $rows["precofinal"]; ?></p>
                </div>  


            <?php

                    }
                } else {
                    echo "Nenhum produto cadastrado!";
                }
            ?>
            
        </div>   

                <br> <br>

    <div class="fpagamento"> 
        <h4> Formas de Pagamento </h4>
        <img src="./imagensFullStack/formas_pagamento.png" alt="Formas de Pagamento">
    </div>

    <footer>
        &copy; 2020 Mayara Nascimento 
    </footer>


    <script src="script.js"></script> <!-- link para acesso arquivo JS externo (colocar no final do <body> de cada aba!) -->

</body>
</html>