<?php 
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "senha*-*"; // todas essas informações estão certas!! Até aqui está td bem, conectou ao BD do MySQL
    $database = "fullstackeletro";

    // Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if(!$conn){
        die("A conexão ao BD falhou: " . mysqli_connect_error());
    } 

    
?>