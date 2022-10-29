<?php 
session_start();
//print_r($_SESSION);
//Verifica se existe uma "sessão", valida.. mantei na pagina atual, se não tela de login
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']); //destroi os dados
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];
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

<!-- ======= body ======= -->
<br>
<?php
    echo "<h1>Bem vindo <u>$logado</u></h1>";
?>


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