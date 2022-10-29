<?php 
session_start();
include_once('config.php');
//print_r($_SESSION);
//Verifica se existe uma "sessão", valida.. mantei na pagina atual, se não tela de login
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']); //destroi os dados
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];

//Listagem
  $sql = "SELECT * FROM usuarios ORDER BY id DESC";
  $result = $conexao->query($sql);
  //print_r($result);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema</title>
	<link rel="stylesheet" href="css/style-sistema.css">
	<link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- CSS only bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<!-- ======= Navbar ======= -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">  
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema</a>
    <span class="navbar-toggle-icon"></span>
  </div>
  <div class="d-flex">
    <a href="sair.php" class="btn btn-danger me-5">Sair</a>
  </div>
</nav>

<!-- ======= userLogin ======= -->
<br>
<?php
    echo "<h1>Bem vindo <u>$logado</u></h1>";
?>

<!-- ======= Table ======= -->
<div class="m-5">
  <table class="table text-white fundo-tb table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Senha</th>
        <th scope="col">Telefone</th>
        <th scope="col">Sexo</th>
        <th scope="col">Data Nascimento</th>
        <th scope="col">Endereço</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php

        while($user_data = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>" .$user_data['id']."</td>";
          echo "<td>" .$user_data['nome']."</td>";
          echo "<td>" .$user_data['senha']."</td>";
          echo "<td>" .$user_data['telefone']."</td>";
          echo "<td>" .$user_data['sexo']."</td>";
          echo "<td>" .$user_data['data_nascimento']."</td>";
          echo "<td>" .$user_data['endereco']."</td>";
          echo "<td>" .$user_data['cidade']."</td>";
          echo "<td>" .$user_data['estado']."</td>";
          echo "</tr>";
        }
      
      ?>
    </tbody>
  </table>
</div>






	<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>
</html>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas
    28/10/2022
-->