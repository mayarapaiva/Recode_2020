<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lojas Full Stack Eletro</title>
    <link rel="stylesheet" href="estilo.css"> <!-- link para acesso arquivo CSS externo -->
</head>
<body>

    <!-- Início do Menu -->
    <?php
        include_once('menu.html');
    ?>
    <!-- Fim do Menu-->

    <header>
        <h2>Nossas Lojas</h2>
    </header>
  
  <hr>  
    <section class="endereco">
        <div class="lojas">
            <h3> Rio de Janeiro </h3>
            <p>  Avenida Presidente Vargas, 5000 </p>
            <p>  10 &ordm; andar </p>
            <p>  Centro </p>
            <p>  (21)1234-5678 </p>
        </div>

        <div class="lojas">
            <h3>  São Paulo </h3>
            <p>  Avenida Paulista, 905 </p>
            <p>  3 &ordm; andar </p>
            <p>  Jardins </p>
            <p>  (11)1234-5678 </p>
        </div>

        <div class="lojas">
            <h3>  Santa Catarina </h3>
            <p>  Rua Major Ávila , 370 </p>
            <p>  10 &ordm; andar </p>
            <p>  Vila Mariana </p>
            <p>  (47)1234-5678 </p> 
        </div>
    </section>
    

    <div class="fpagamento"> 
            <h4> Formas de Pagamento </h4>
            <img src="./imagensFullStack/formas_pagamento.png" alt="Formas de Pagamento">
        </div>

        <footer>
            &copy; 2020 Recode Pro
        </footer>

</body>
</html>