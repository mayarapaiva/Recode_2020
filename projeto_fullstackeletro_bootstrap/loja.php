<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lojas Full Stack Eletro</title>
    <link rel="stylesheet" href="estilo.css"> <!-- link para acesso arquivo CSS externo -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
  <div class="container bg-info">
        <div class="row">

            <div class="col-sm-4 text-light"> 
                <div>
                    <h3> Rio de Janeiro </h3>
                    <p>  Avenida Presidente Vargas, 5000 </p>
                    <p>  10 &ordm; andar </p>
                    <p>  Centro </p>
                    <p>  (21)1234-5678 </p>
                </div> 
            </div>

            <div class="col-sm-4 text-light"> 
                <div>
                    <h3>  São Paulo </h3>
                    <p>  Avenida Paulista, 905 </p>
                    <p>  3 &ordm; andar </p>
                    <p>  Jardins </p>
                    <p>  (11)1234-5678 </p>
                </div> 
            </div>

            <div class="col-sm-4 text-light"> 
                <div>
                    <h3>  Santa Catarina </h3>
                    <p>  Rua Major Ávila , 370 </p>
                    <p>  10 &ordm; andar </p>
                    <p>  Vila Mariana </p>
                    <p>  (47)1234-5678 </p> 
                </div> 
            </div>

        </div>
    </div>
    
    <br><br>

        <div class="fpagamento"> 
            <h4> Formas de Pagamento </h4>
            <img src="./imagensFullStack/formas_pagamento.png" alt="Formas de Pagamento">
        </div>

        <footer>
            &copy; 2020 Mayara Nascimento
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>