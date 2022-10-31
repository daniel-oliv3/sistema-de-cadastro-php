<?php


if(!empty($_GET['id'])){

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){			
        while($user_data = mysqli_fetch_assoc($result)){
            $nome = $user_data['nome']; 
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo']; 
            $data_nascimento = $user_data['data_nascimento'];
            $endereco = $user_data['endereco'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
        }						
    }        
}

header('Location: sistema.php'); 










?>