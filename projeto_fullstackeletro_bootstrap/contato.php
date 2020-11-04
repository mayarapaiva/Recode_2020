<?php
    include_once('conexao.php'); // conexão com o BD em arquivo externo!
?>

<?php
    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];
    
        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn -> query($sql);
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato Full Stack Eletro</title>
    <link rel="stylesheet" href="estilo.css"> <!-- link para acesso arquivo CSS externo -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script
    src="https://kit.fontawesome.com/1405832236.js" crossorigin="anonymous"> // link para acesso site externo (ícones) 
    </script>

</head>
<body>

    <!-- Início do Menu -->
    <?php
        include_once('menu.html');
    ?>
    <!-- Fim do Menu-->

    <header>
        <h2>Contato</h2>
    </header>
    
    <hr>

    <section class="contato">

        <div class="info">
            <i class="fas fa-at"></i>
            <p> contato@fullstackeletro.com</p>
        </div>

        <div class="info">
            <i class="fab fa-whatsapp"></i>
            <p>(11)91111-1111</p>
        </div>

    </section>

    <div class="container bg-light">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="nome" class="form-control" placeholder="Seu nome">
            </div>
            
            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <input type="text" name="msg" class="form-control" placeholder="Deixe aqui sua mensagem ou comentário sobre sua experiência Full Stack Eletro">
            </div>

            <input type="submit" name="submit" class="btn btn-outline-info btn-block" value="Enviar">
            
            
        </form>
    </div>

    <br> <br>

    <?php
        $sql = "select * from comentarios";
        $result = $conn -> query($sql); 
    
        if($result->num_rows > 0){
            while($rows = $result -> fetch_assoc()){
                //echo $rows["categoria"];
                ?>
                <div class="container bg-light">
                    <div class="row">
                        <div class="col-sm-4"> Data: </div>
                        <div class="col-sm-4"> Nome: </div>
                        <div class="col-sm-4"> Mensagem: </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 text-info"> <?php echo $rows['data'] ?> </div>
                        <div class="col-sm-4 text-info"> <?php echo $rows['nome'] ?> </div>
                        <div class="col-sm-4 text-info"> <?php echo $rows['msg'] ?> </div>
                    </div>
                </div>
                <?php
                /*
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
                echo "<hr>";
                */
            }
        } else {
            echo "Ainda não existem comentários enviados! Aproveite e deixe registrado a sua experiência com a Full Stack Eletro! ";
        }
    ?>

    <br> <br>

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