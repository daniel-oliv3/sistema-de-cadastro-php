<?php

	if(isset($_POST['submit'])){
		
		/*print_r('Nome: ' . $_POST['nome']);
		print_r('<br>');
		print_r('E-mail: ' . $_POST['email']);
		print_r('<br>');
		print_r('Telefone: ' . $_POST['telefone']);
		print_r('<br>');

		print_r('Sexo: ' . $_POST['genero']);
		print_r('<br>');
		print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
		print_r('<br>');

		print_r('Endereço: ' . $_POST['endereco']);
		print_r('<br>');
		print_r('Cidade: ' . $_POST['cidade']);
		print_r('<br>');
		print_r('Estado: ' . $_POST['estado']);
		print_r('<br>');*/

		include_once('config.php');

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$sexo = $_POST['genero'];
		$data_nascimento = $_POST['data_nascimento'];
		$endereco = $_POST['endereco'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];

		$result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nascimento, endereco, cidade, estado) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nascimento', '$endereco', '$cidade', '$estado')");

	}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
	<link rel="stylesheet" href="css/style-form.css">
	<link rel="shortcut icon" href="img/favicon.ico"/>
</head>
<body>

<!-- Formulário de Usuário -->
<div class="box">
	<form action="formulario.php" method="POST">
		<fieldset>
			<legend><b>Formulário de Usuário</b></legend>
			<br/><br/>
			<div class="inputBox">
				<input type="text" name="nome" id="nome" class="inputUser" required>
				<label for="nome" class="labelInput">Nome completo</label>
			</div>
			<br/>
			<div class="inputBox">
				<input type="text" name="email" id="email" class="inputUser" required>
				<label for="email" class="labelInput">Email</label>
			</div>
			<br/>
			<div class="inputBox">
				<input type="tel" name="telefone" id="telefone" class="inputUser" required>
				<label for="telefone" class="labelInput">Telefone</label>
			</div>
			<p>Sexo:</p>
			<input type="radio" id="feminino" name="genero" value="feminino" required>
			<label for="feminino">Feminino</label>
			<input type="radio" id="masculino" name="genero" value="masculino" required>
			<label for="masculino">Masculino</label>
			<br/><br/>
			<!--======= Data de Nascimento ======= -->
			<label for="data_nascimento"><b>Data de Nacimento</b></label>
			<input type="date" name="data_nascimento" id="data_nascimento" required>				
			
			<br/><br/>
			<div class="inputBox">
				<input type="text" name="endereco" id="endereco" class="inputUser" required>
				<label for="endereco" class="labelInput">Endereço</label>
			</div>
			<br/>
			<div class="inputBox">
				<input type="text" name="cidade" id="cidade" class="inputUser" required>
				<label for="cidade" class="labelInput">Cidade</label>
			</div>
			<br/>			
			<div class="inputBox">
				<input type="" name="estado" id="estado" class="inputUser" required>
				<label for="estado" class="labelInput">Estado</label>
			</div>
			<br/>
			<input type="submit" name="submit" id="submit">
		</fieldset>
	</form>
</div>





	
	<script src="js/script.js"></script>
</body>
</html>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas
    27/10/2022
-->