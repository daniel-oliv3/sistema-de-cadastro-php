<?php

	if(!empty($_GET['id'])){

		include_once('config.php');

		$id = $_GET['id'];

		$sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

		$result = $conexao->query($sqlSelect);

		if($result->num_rows > 0){			
			while($user_data = mysqli_fetch_assoc($result)){
				$nome = $user_data['nome']; //yes exist
				$email = $user_data['email'];
				$senha = $user_data['senha'];
				$telefone = $user_data['telefone'];
				$sexo = $user_data['sexo'];
				$data_nascimento = $user_data['data_nascimento'];
				$endereco = $user_data['endereco'];
				$cidade = $user_data['cidade'];
				$estado = $user_data['estado'];
			}
			//print_r($nome);						
		}else {
			header('Location: sistema.php'); //not exist
		}

		

	
	}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edição de Formulário</title>
	<link rel="stylesheet" href="css/style-form.css">
	<link rel="shortcut icon" href="img/favicon.ico"/>
</head>
<body>

<!-- Editar Formulário de Usuário -->
<a href="sistema.php">Voltar</a>
<div class="box">
	<form action="formulario.php" method="POST">
		<fieldset>
			<legend><b>Editar Formulário</b></legend>
			<br/><br/>
			<div class="inputBox">
				<input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
				<label for="nome" class="labelInput">Nome completo</label>
			</div>
			<br/>
			<div class="inputBox">
				<input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
				<label for="email" class="labelInput">Email</label>
			</div>
			<br/>
			<div class="inputBox">
				<input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
				<label for="senha" class="labelInput">Senha</label>
			</div>
			<br/>
			<div class="inputBox">
				<input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
				<label for="telefone" class="labelInput">Telefone</label>
			</div>
			<p>Sexo:</p>
			<input type="radio" id="feminino" name="sexo" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required>
			<label for="feminino">Feminino</label>
			<input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?>  required>
			<label for="masculino">Masculino</label>
			<br/><br/>
			<!--======= Data de Nascimento ======= -->
			<label for="data_nascimento"><b>Data de Nacimento</b></label>
			<input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nascimento ?>" required>				
			
			<br/><br/>
			<div class="inputBox">
				<input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
				<label for="endereco" class="labelInput">Endereço</label>
			</div>
			<br/>
			<div class="inputBox">
				<input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
				<label for="cidade" class="labelInput">Cidade</label>
			</div>
			<br/>			
			<div class="inputBox">
				<input type="" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>" required>
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
    29/10/2022
-->