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

    <!-- links referencia bootstrap 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     fim links bootstrap -->

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
            <p>(11)91234-5678</p>
        </div>

    </section>


    <form action="" method="post" class="msg">
        <label for="name">Nome:</label>
        <input class="entradatxt1" type="text" name="nome" style= width:500px;>
        <br> <br>
        <label for="mensagem">Mensagem:</label>
        <input class="entradatxt2" type="text" name="msg" style= width:500px;>
        <input type="submit" name="submit" value="Enviar">

        <br> <br>
        
    </form>

    <?php
        $sql = "select * from comentarios";
        $result = $conn -> query($sql); 
    
        if($result->num_rows > 0){
            while($rows = $result -> fetch_assoc()){
                //echo $rows["categoria"];
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
                echo "<hr>";
            }
        } else {
            echo "Ainda não existem comentários enviados! Aproveite e deixe registrado a sua experiência com a Full Stack Eletro! ";
        }
    ?>


    <div class="fpagamento"> 
        <h4> Formas de Pagamento </h4>
        <img src="./imagensFullStack/formas_pagamento.png" alt="Formas de Pagamento">
    </div>

    <footer>
        &copy; 2020 Recode Pro
    </footer>

</body>
</html>