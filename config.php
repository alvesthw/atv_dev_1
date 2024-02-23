<?php
    $servername = "localhost"; // endereço do servidor MySQL
    $username = "root"; // seu nome de usuário do MySQL
    $password = "2003"; // sua senha do MySQL
    $database = "manolito"; // nome do seu banco de dados

    // Criando uma conexão com o MySQL
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificando a conexão
    if ($conn->connect_error) 
    {
        echo "ERRO";
    }
    else
    {
        echo "Conectado ao banco de dados";
    }
    
    include_once('config.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $result = mysqli_query($_conn, "INSERT INTO usuarios(nome,email,msg) VALUES ($nome,$email,$msg");
    
?>