<?php
include_once('config.php');

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$sexo = $_POST['sexo'];
	$data_nascimento = $_POST['data_nascimento'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];

    $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha', telefone='$telefone', sexo='$sexo', data_nascimento='$data_nascimento', endereco='$endereco', cidade='$cidade', estado='$estado' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}

header('Location: sistema.php');



















?>